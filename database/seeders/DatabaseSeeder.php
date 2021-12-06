<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Estado;
use App\Models\Tag;
use App\Models\Tallascamisas;
use App\Models\Tallasropa;
use App\Models\Dia;
use Illuminate\Database\Seeder;

//libreria para crear la carpeta que va a almacenar las imagenes
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //elimina la carpeta post
        Storage::deleteDirectory('public/posts');
        //creamos la carpeta
        
        //Storage::makeDirectory('posts');
        Storage::makeDirectory('public/posts');

        //llamo al seeder para los roles
        $this->call(RoleSeeder::class);

        $this->call(EstadoSeeder::class);

        $this->call(FederacionSeeder::class);

        $this->call(TallasropaSeeder::class);

        $this->call(TallascalzadoSeeder::class);

        $this->call(TallascamisaSeeder::class);

        $this->call(TallaschaquetaSeeder::class);

        $this->call(TallaspantalonSeeder::class);

        $this->call(TallaszapatillaSeeder::class);

        $this->call(DiaSeeder::class);

        $this->call(MesSeeder::class);

        $this->call(YearSeeder::class);

        $this->call(PaisSeeder::class);
      //  \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        //genere datos para la categoria
        Category::factory(4)->create();
        Tag::factory(8)->create();

      

       


    }
}
