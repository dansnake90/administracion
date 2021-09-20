<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
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

      //  \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        //genere datos para la categoria
        Category::factory(4)->create();
        Tag::factory(8)->create();

        $this->call(PostSeeder::class);


    }
}
