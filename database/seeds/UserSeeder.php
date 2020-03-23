<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
          'name'      =>    'Cesar Augusto',
          'apellido'  =>    'Garzón Puentes',
          'cedula'    =>    '1024556870',
          'mobile'    =>    '3186132665',
          'email'     =>    'cesarago852@gmail.com',
          'password'  =>    bcrypt('12345'),
          'type'      =>    'administrador',
          'imagen'    =>    'User_1475531509.jpg',
          'ruta'      =>    public_path() . '/Imagenes/Users/User_1475531509.jpg'

        ]);

        factory(User::class, 15)->create();
    }
}
