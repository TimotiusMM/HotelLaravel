<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama'     => 'Administrator',
            'username'    => 'timotius',
            'role'    => 'admin',
            'password' => bcrypt('timo1234'),
        ]);

        Admin::create([
            'nama'     => 'Resepsionis',
            'username'    => 'marcelino',
            'role'    => 'resepsionis',
            'password' => bcrypt('marcel1234'),
        ]);

        Admin::create([
            'nama'     => 'Tamu',
            'username'    => 'modo',
            'role'    => 'tamu',
            'password' => bcrypt('modo1234'),
        ]);
    }
}
