<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create(['name'=>'Chaise num one']);
        Categorie::create(['name'=>'Chaise num two']);
        Categorie::create(['name'=>'Chaise num three']);

    }
}
