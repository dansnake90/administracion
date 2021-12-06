<?php

namespace Database\Seeders;

use App\Models\Tallascamisa;
use Illuminate\Database\Seeder;

class TallascamisaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tallas = [
            '14',
            '14,5',
            '15',
            '15,5',
            '16',
            '16,5',
            '17',
            '17,5',
            '18',
            '18,5',
            '19',
            '19,5',
            '20',
            '20,5',
            '21',
            'S',
            'M',
            'L',
            'XL'
        ];
    
        foreach ($tallas as $talla) {

            Tallascamisa::create([
                'valor' => $talla
            ]);
            
    
        }
    }
}
