<?php

namespace App\Imports;

use App\Models\Grupo;
use App\Models\Invitacione;
use App\Models\Invitado;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class InvitadosImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        unset($collection[0]);
        // dd($collection);
        foreach ($collection as $row) 
        {

            $nombre = $row[1];
            if ($row[2] == 'M') {
                $por = 0;
            }
            if ($row[2] == 'J') {
                $por = 1;
            }
            $tipo = '';
            $tipo = $row[3]=='F'?1:$tipo;
            $tipo = $row[3]=='A'?2:$tipo;
            $conjunto = $row[4];
            $subconjunto = $row[5];
            $grupo_name = $row[6];
            $cantidad = $row[7];
            //            $evento = ((( $row[12]==1 ? 1:$row[13]) == 1) ? 2: $row[14]) == 1 ? 3 : 0;
            $eventos = [];
            $civil = $row[12] == 1 ? array_push($eventos,1): 0;
            $sellamiento = $row[13] == 1 ? array_push($eventos,2) : 0;
            $fiesta = $row[14] == 1 ? array_push($eventos,3) : 0;
            
            $dni = '';
            $correo = '';
            
            $grupo = Grupo::where('name', $grupo_name)->first();
            if (empty($grupo)) {
                $grupo = Grupo::create(['name' => $grupo_name]);
            }

            // for ($i=0; $i < $cantidad; $i++) { 
            // }
            $invitado = Invitado::create([
                'nombre' => $nombre,
                'apellidos' => '',
                'telefono' => '',
                'dni' => $dni,
                'correo' => $correo,
                'conjunto' => $conjunto,
                'subconjunto' => $subconjunto,
                'tipo' => $tipo,
                'por' => $por,
                'grupo_id' => $grupo->id,
            ]);

            $newcodigo = random_int(100000, 999999);
            
            while (!empty(Invitacione::where('codigo', $newcodigo)->first())) {
                //dd('no es vacio. ya hay una invitacion con este codigo');
                $newcodigo = random_int(100000, 999999);
            }

            foreach ($eventos as $evento) {
                if ( empty(Invitacione::where('grupo_id', $grupo)->where('evento_id', $evento)->first()) ) {
                    Invitacione::create([
                        'evento_id' => $evento,
                        'grupo_id' => $grupo->id,
                        'estado' => 0,
                        'cantidad' => $grupo->invitados->count(),
                        'cantidad_confirmada' => 0,
                        'cantidad_rechazada' => 0,
                        'codigo' => $newcodigo,
                    ]);
                }
            }


        }
    }
}
