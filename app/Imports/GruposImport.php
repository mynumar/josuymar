<?php

namespace App\Imports;

use App\Models\Grupo;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class GruposImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    
    {      
        $newgrupos = [];

        foreach ($collection as $row) {
            
            if (!array_search(ucwords($row[6]),$newgrupos)) {
                array_push($newgrupos,ucwords($row[6]));
            }
            
        }
        // dd($newgrupos);

        foreach ($newgrupos as $grupo_name) {
            $grupo = Grupo::where('name', $grupo_name)->first();
            if (empty($grupo)) {
                $grupo = Grupo::create(['name' => $grupo_name]);
            }
        }

    }
}
