<?php

namespace Database\Seeders;

use App\Models\Tallasropa;
use Illuminate\Database\Seeder;

class TallasropaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tallas = [
            'XXS',
            'XS',
            'S',
            'M',
            'L',
            'XL',
            'XXL',
            'XXXL'
        ];
    
        foreach ($tallas as $talla) {

            Tallasropa::create([
                'valor' => $talla
            ]);
            
    
        }
    }
}
