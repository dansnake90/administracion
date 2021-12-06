<?php

namespace Database\Seeders;

use App\Models\Tallaszapatilla;
use Illuminate\Database\Seeder;

class TallaszapatillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tallas = [
            '4.0',
            '4.5',
            '5.0',
            '5.5',
            '6.0',
            '6.5',
            '7.0',
            '7.5',
            '8.0',
            '8.5',
            '9.0',
            '9.5',
            '10.0',
            '10.5',
            '11.0',
            '11.5',
            '12.0',
            '12.5',
            '13.0',
            '13.5',
            '14.0',
            '14.5',
            '15.0',
            '15.5',
            '16.0',
            '16.5',
            '17.0',
            '17.5',
            '18.0',
        ];
    
        foreach ($tallas as $talla) {

            Tallaszapatilla::create([
                'valor' => $talla
            ]);
            
    
        }
    }
}
