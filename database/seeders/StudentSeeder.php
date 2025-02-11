<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'nama' => "sila arduino",
            'alamat' => "sempu",
            'jenis_kelamin' => 'Perempuan',
        ]);
    }
}
