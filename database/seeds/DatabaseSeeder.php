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
        // $this->call(UsersTableSeeder::class);
        $this->call(BukuSeeder::class);
        $this->call(PenerbitSeeder::class);

        $this->call(PenjualSeeder::class);
        $this->call(PembeliSeeder::class);
        $this->call(PerpusSeeder::class);
       
    }
}
