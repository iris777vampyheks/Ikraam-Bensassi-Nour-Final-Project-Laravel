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
            'adresse'=>'Ain sebaa',
            'tel'=>'0654851234',
            'email'=>'lionsgeek@gmail.com',
            'localisation'=>'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d11050.261470957426!2d6.127334!3d46.179307!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1695394829549!5m2!1sfr!2sma',
        ]);
    }
}
