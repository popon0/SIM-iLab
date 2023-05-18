<?php

use Illuminate\Database\Seeder;
use App\Models\UserLevel;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        UserLevel::create([
            'id' => 1,
            'nama_level' => 'Administrator',
            'created_at' => $now,
            'updated_at' => null
        ]);

        UserLevel::create([
            'id' => 2,
            'nama_level' => 'Operator',
            'created_at' => $now,
            'updated_at' => null
        ]);

        UserLevel::create([
            'id' => 3,
            'nama_level' => 'Pegawai',
            'created_at' => $now,
            'updated_at' => null
        ]);
    }
}
