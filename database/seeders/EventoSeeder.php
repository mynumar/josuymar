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
        // Evento::create([
        //     'name' => 'Matrimonio Civil',
        //     'estado' => '1',
        //     'fecha_inicio' => '2023-05-18 14:00:00',
        //     'fecha_fin' => '2023-05-18 15:00:00',
        //     'ubicacion' => 'https://goo.gl/maps/F3sR6NkMQQrjuDGa7',
        //     'name_lugar' => 'Palacio de la Cultura- Puente Piedra',
        //     'direccion' => 'Av. San Lorenzo 426b, Puente Piedra 15121',
        // ]);

        Evento::create([
            'name' => 'Sellamiento',
            'estado' => '1',
            'fecha_inicio' => '2024-01-12',
            'fecha_fin' => '2024-01-12',
            'ubicacion' => 'https://maps.app.goo.gl/yjwqxrErbqSXc5Jn8',
            'name_lugar' => 'Saratoga Springs Utah Temple',
            'direccion' => '987 Ensign Dr, Saratoga Springs, UT 84045, Estados Unidos',
        ]);

        Evento::create([
            'name' => 'Fiesta de bodas',
            'estado' => '1',
            'fecha_inicio' => '2024-01-12 20:00:00',
            'fecha_fin' => '2024-01-12 01:00:00',
            'ubicacion' => 'https://maps.app.goo.gl/iKCbYTwk4U1vYuEJ6',
            'name_lugar' => 'The Church of Jesus Christ Of Latter-day Saints',
            'direccion' => '300 west 3200 north, Lehi Utah 84043',
        ]);
    }
}
