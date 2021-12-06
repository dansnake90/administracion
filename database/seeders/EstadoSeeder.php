<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //array de estados
    $estados = ['registrado', 'validado', 'confirmado', 'eliminado'];
    
    foreach ($estados as $estado) {

        Estado::create([
            'nombre' => $estado
        ]);
        

    }

        
    }
}
