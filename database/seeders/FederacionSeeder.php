<?php

namespace Database\Seeders;

use App\Models\Federacion;
use Illuminate\Database\Seeder;

class FederacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $federaciones = [
            'ATLETISMO',
            'BADMINTON',
            'BALONCESTO',
            'BALONMANO',
            'BEISBOL',
            'BOLOS',
            'BOXEO',
            'BUCEO',
            'CANOTAJE',
            'CICLISMO',
            'ECUESTRE',
            'ESGRIMA',
            'ESQUI NAUTICO',
            'FRONTON',
            'FUTBOL',
            'GIMNASIA',
            'GOLF',
            'HOCKEY CESPED',
            'JUDO',
            'KARATE DO',
            'LEVANTAMIENTO PESAS',
            'LUCHA',
            'PENTATHLON',
            'RACQUETBALL',
            'NATACION',
            'PATINAJE',
            'REMO',
            'RUGBY',
            'SQUASH',
            'TAEKWONDO',
            'TENIS',
            'TENIS DE MESA',
            'TIRO CON ARCO',
            'TIRO AL BLANCO',
            'TIRO AL VUELO',
            'TRIATLON',
            'VELA',
            'VOLEIBOL',
            'ANDINISMO',
            'AEREA',
            'AEROMODELISMO',
            'AUTOMOVILISMO',
            'CAZA Y PESCA',
            'KENDO',
            'MOTOCICLISMO',
            'PARACAIDISMO',
            'PARALIMPICA',
            'POLO',
            'RODEO',
            'SKI',
            'COCH',
            'IND',
            'OTRA FEDERACION',
            'SURF'

        ];
    
        foreach ($federaciones as $federacion) {

            Federacion::create([
                'nombre' => $federacion
            ]);
            
    
        }
    }
}
