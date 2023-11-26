<?php

namespace Database\Seeders;

use App\Models\Resepsionis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ResepsionisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resepsionis::factory(5)->create();
    }
}
