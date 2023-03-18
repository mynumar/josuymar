<?php

namespace App\Imports;

use App\Models\Grupo;
use App\Models\Invitacione;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class InvitacionesImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        unset($collection[0]);
        $codigos = Invitacione::pluck('codigo');
        
        foreach ($collection as $row) {

            $eventos = [];

            if($row[12] == '1')  {array_push($eventos, 1);}
            if($row[13] == '1')  {array_push($eventos, 2);}
            if($row[14] == '1')  {array_push($eventos, 3);}

            // dd($eventos);
            $grupo_name = $row[6];

            $grupo = Grupo::where('name', $grupo_name)->first();

            
            foreach ($eventos as $evento) {

                $invitacione = Invitacione::where('grupo_id', $grupo->id)->where('evento_id', $evento)->first();
                
                if (empty($invitacione) ) {
                    // dd($invitacione);

                    $newcodigo = random_int(100000, 999999);

                    while ($codigos->search($newcodigo)) {
                        $newcodigo = random_int(100000, 999999);
                    }
                    
                    $codigos->push($newcodigo."");

                    $cantidad = $row[7];
                
                    Invitacione::create([
                        'evento_id' => $evento,
                        'grupo_id' => $grupo->id,
                        'estado' => 0,
                        'cantidad' => $cantidad,
                        'cantidad_confirmada' => 0,
                        'cantidad_rechazada' => 0,
                        'codigo' => $newcodigo,
                    ]);

                } else {

                    $invitacione->update([
                        'cantidad' => $invitacione->cantidad + $row[7]
                    ]);
                }


            }
        }
    }
}
