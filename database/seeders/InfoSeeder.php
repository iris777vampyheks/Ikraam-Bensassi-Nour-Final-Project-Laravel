<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::create([
            'adresse'=>'Ain chok',
            'tel'=>'075228658',
            'email'=>'ikram@gmail.com',
        ]);
    }
}
