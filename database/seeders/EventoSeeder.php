<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'name' => 'Matrimonio Civil',
            'estado' => '1',
            'fecha_inicio' => '2023-05-18 14:00:00',
            'fecha_fin' => '2023-05-18 15:00:00',
            'ubicacion' => 'https://goo.gl/maps/F3sR6NkMQQrjuDGa7',
            'name_lugar' => 'Palacio de la Cultura- Puente Piedra',
            'direccion' => 'Av. San Lorenzo 426b, Puente Piedra 15121',
        ]);

        Evento::create([
            'name' => 'Sellamiento',
            'estado' => '1',
            'fecha_inicio' => '2023-05-19 14:00:00',
            'fecha_fin' => '2023-05-19 15:00:00',
            'ubicacion' => 'https://goo.gl/maps/PtXNw8mgDxDDPfY47',
            'name_lugar' => 'Templo de Lima Perú',
            'direccion' => 'Av. Javier Prado Este 6420, La Molina 15024',
        ]);

        Evento::create([
            'name' => 'Fiesta de bodas',
            'estado' => '1',
            'fecha_inicio' => '2023-05-19 20:00:00',
            'fecha_fin' => '2023-05-20 01:00:00',
            'ubicacion' => 'https://goo.gl/maps/mNT85VYQZaCc86jAA',
            'name_lugar' => 'Villa Elí',
            'direccion' => 'Mz. C , de la Urb. de pobladores Sta. María',
        ]);
    }
}
