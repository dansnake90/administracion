<?php

namespace Database\Seeders;

use App\Models\Tallascalzado;
use Illuminate\Database\Seeder;

class TallascalzadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tallas = [
            '32',
            '33',
            '34',
            '35',
            '36',
            '37',
            '38',
            '39',
            '40',
            '41',
            '42',
            '43',
            '44',
            '45',
            '46',
            '47',
            '48',
            '49',
            '50',
            '51',
            '52',
        ];
    
        foreach ($tallas as $talla) {

            Tallascalzado::create([
                'valor' => $talla
            ]);
            
    
        }
    }
}
