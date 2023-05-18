<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelSeeder::class);
        DB::table('users')->insert([
            [
                'level_id' => 1,
                'name' => 'admin1',
                'username' => 'admin',
                'email' => 'admin@ven.com',
                'password' => bcrypt('12345'),
            ],
            [
                'level_id' => 2,
                'name' => 'petugas1',
                'username' => 'petugas',
                'email' => 'petugas@ven.com',
                'password' => bcrypt('12345'),
            ],
            [
                'level_id' => 2,
                'name' => 'pegawai1',
                'username' => 'pegawai',
                'email' => 'pegawai@ven.com',
                'password' => bcrypt('12345'),
            ]
        ]);
    }
}
