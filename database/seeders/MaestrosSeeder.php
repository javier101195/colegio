<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maestro;

class MaestrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $maestro = new maestro();
        $maestro-> nombre = "Juan Gutierrez";
        $maestro->save();

        $maestro2 = new maestro();
        $maestro2-> nombre = "Pedro Gomez";
        $maestro2->save();

        $maestro3 = new maestro();
        $maestro3-> nombre = "Raul Torres";
        $maestro3->save();

        $maestro4 = new maestro();
        $maestro4-> nombre = "Jose Madero";
        $maestro4->save();

        $maestro5 = new maestro();
        $maestro5-> nombre = "Javier Mendoza";
        $maestro5->save();
    }
}
