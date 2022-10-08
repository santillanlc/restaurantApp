<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlatilloIngrediente;

class PlatilloIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlatilloIngrediente::create(['platillo_id' => 1, 'ingrediente_id' => 1]);
        PlatilloIngrediente::create(['platillo_id' => 1, 'ingrediente_id' => 5]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 3]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 4]);
        PlatilloIngrediente::create(['platillo_id' => 2, 'ingrediente_id' => 1]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 4]);
        PlatilloIngrediente::create(['platillo_id' => 3, 'ingrediente_id' => 5]);
    }
}
