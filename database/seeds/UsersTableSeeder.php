<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Example
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);*/
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('roles')->insert([
            'name' => 'Administrador',
            'display_name' => 'Usuario Administrador',
            'description' => 'Super usuario con el control total de la aplicacion',
        ]);
        DB::table('permission')->insert([
            'name' => 'Administrador',
            'display_name' => 'Permiso Administrador',
            'description' => 'Permiso para con acceso total  a la aplicacion',
        ]);
    }
}
