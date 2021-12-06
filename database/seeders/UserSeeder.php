<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Patricio',
            'lastname' => 'Caicedo',
            'email' => 'patriciocaicedobelmar@gmail.com',
            'password' => bcrypt('12345678'),
            'estado_id' => '1'
        ])->assignRole('Admin');





        
    }
}
