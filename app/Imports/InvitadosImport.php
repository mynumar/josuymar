<?php

namespace App\Imports;

use App\Models\Grupo;
use App\Models\Invitacione;
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
        foreach ($collection as $row) 
        {
            if ($row[0] == '#') {
                continue;
            }

            $nombre = $row[1];
            $por = $row[2];
            $tipo = $row[3];
            $conjunto = $row[4];
            $subconjunto = $row[5];
            $grupo = $row[6];
            $cantidad = $row[7];

            $grupo = Grupo::where('name', $grupo)->first();

            


            // Invitacione::create([
            //     'name' => $row[0],
            // ]);
        }
    }
}
