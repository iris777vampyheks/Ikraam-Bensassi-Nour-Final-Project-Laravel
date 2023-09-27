<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'titre'=>'image1',
            'prix'=>50,
            'image'=>'image1.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image2',
            'prix'=>50,
            'image'=>'image2.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image3',
            'prix'=>50,
            'image'=>'image3.png',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image4',
            'prix'=>50,
            'image'=>'image4.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image5',
            'prix'=>50,
            'image'=>'image5.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image6',
            'prix'=>50,
            'image'=>'image6.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image7',
            'prix'=>50,
            'image'=>'image7.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image8',
            'prix'=>50,
            'image'=>'image8.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image9',
            'prix'=>50,
            'image'=>'image9.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image10',
            'prix'=>50,
            'image'=>'image10.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image12',
            'prix'=>50,
            'image'=>'image12.png',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image13',
            'prix'=>50,
            'image'=>'image13.png',
            'createur'=>1,
            'stock'=>15,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image14',
            'prix'=>50,
            'image'=>'image14.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image15',
            'prix'=>50,
            'image'=>'image15.png',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image16',
            'prix'=>50,
            'image'=>'image16.png',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image17',
            'prix'=>90,
            'image'=>'image17.png',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en bois',
        ]);
        Produit::create([
            'titre'=>'image18',
            'prix'=>50,
            'image'=>'image18.png',
            'createur'=>1,
            'stock'=>2,
            'categorie'=>'Chaise en fer',
        ]);
        Produit::create([
            'titre'=>'image19',
            'prix'=>50,
            'image'=>'image19.png',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'image20',
            'prix'=>50,
            'image'=>'image20.png',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en fer',
        ]);

    }
}
