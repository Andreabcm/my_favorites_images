<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'usuario',
            'email' => 'usuario@gmail.com'
        ]);

        Image::factory()->create([
        
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'title' => 'Muebles',
            'user_id' => '1',
        ]);

        Image::factory()->create([
     
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'title' => 'Muebles',
            'user_id' => '1',
        ]);

        Image::factory()->create([
 
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',            
            'title' => 'Muebles',
            'user_id' => '1',
        ]);
    }
}
