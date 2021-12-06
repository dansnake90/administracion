<?php

namespace Database\Seeders;

use App\Models\Tallaschaqueta;
use Illuminate\Database\Seeder;

class TallaschaquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tallas = [
            '0-2',
            '4-6',
            '8-10',
            '12-14',
            '16',
            '18',
            '20',
            '36',
            '38',
            '40',
            '42',
            '44',
            '46',
            '48',
            '50',
            '52',
        ];
    
        foreach ($tallas as $talla) {

            Tallaschaqueta::create([
                'valor' => $talla
            ]);
            
    
        }
    }
}
