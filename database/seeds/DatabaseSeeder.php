<?php

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
        $this->PoblarUsuarios();
    }
    public function PoblarUsuarios()
    {
        DB::table('users')->insert([
            'name' => 'angel',
            'email' => 'angel_allan_duy@hotmail.com',
            'password' => bcrypt('pasopaso'),
            'rol' => 'cobrador',
        ]);        
        DB::table('users')->insert([
            'name' => 'alejandro',
            'email' => 'dogor75@gmail.com',
            'password' => bcrypt('pasopaso'),
            'rol' => 'suscriptor',
        ]);        

        DB::table('users')->insert([
            'name' => 'cesar',
            'email' => 'cesar75@gmail.com',
            'password' => bcrypt('pasopaso'),
            'rol' => 'suscriptor',
        ]);        
    }

    public function PoblarServicios()
    {
        DB::table('users')->insert([
            'name' => 'angel',
            'email' => 'angel_allan_duy@hotmail.com',
            'password' => bcrypt('pasopaso'),
            'rol' => 'cobrador',
        ]);        
        DB::table('users')->insert([
            'name' => 'alejandro',
            'email' => 'dogor75@gmail.com',
            'password' => bcrypt('pasopaso'),
            'rol' => 'suscriptor',
        ]);        

        DB::table('users')->insert([
            'name' => 'cesar',
            'email' => 'cesar75@gmail.com',
            'password' => bcrypt('pasopaso'),
            'rol' => 'suscriptor',
        ]);        
    }
}
