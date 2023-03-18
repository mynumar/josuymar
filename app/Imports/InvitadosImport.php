<?php

namespace App\Imports;

use App\Models\Grupo;
use App\Models\Invitacione;
use App\Models\Invitado;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;

class InvitadosImport implements ToModel, WithBatchInserts
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        // dd($collection);
        // unset($row[0]);
        // dd($row);
   
        if ($row[0] == '#') {
            return;
        }

        $nombre = $row[1];
        $por = '';
        if ($row[2] == 'M') {
            $por = 0;
        }
        if ($row[2] == 'J') {
            $por = 1;
        }
        $dni = '';
        $correo = '';
        $tipo = '';
        $tipo = $row[3]=='F'?1:$tipo;
        $tipo = $row[3]=='A'?2:$tipo;
        $conjunto = $row[4];
        $subconjunto = $row[5];

        $grupo_name = $row[6];
        $grupo = Grupo::where('name', $grupo_name)->first();

        
        return new Invitado([
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
    }

    public function batchSize(): int
    {
        return 1000;
    }
}
