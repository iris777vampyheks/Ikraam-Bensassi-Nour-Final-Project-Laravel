<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduitWCntoller extends Controller
{
    public function index(){
        $categories= Categorie::all();
        $produits= Produit::all();
        return view('backend.webmaster.produit.produit' , compact("categories" , "produits"));
    }

    public function destroyproduit(Produit $produit)
    {
        Storage::disk("public")->delete('imgs/product/' . $produit->image);
        $produit->delete();
        return redirect()->back()->with("error" , "product deleted successfully");

    }

    public function updateproduit(Request $request, Produit $produit)
    {

        request()->validate([
            "titre" => ["required"],
            "prix" => ["required"],
            "stock" => ["required"],
            "categorie" => ["required"],
        ]);

        $image = $request->file("image");


        if ($image) {
            Storage::disk("public")->delete('imgs/product/' . $produit->image);
            $image->storePublicly('imgs/product/', 'public');
            $data = [
                "titre" => $request->titre,
                "prix" => $request->prix,
                "stock" => $request->stock,
                "categorie" => $request->categorie,
                "createur" => 0,
                "image" => $image->hashName(),
            ];

            $produit->update($data);
            return redirect()->back()->with("success" , "le produit a été modifié avec succès");
        } else {
            $data = [
                "titre" => $request->titre,
                "prix" => $request->prix,
                "stock" => $request->stock,
                "categorie" => $request->categorie,
                "createur" => 0,
            ];


            $produit->update($data);
            return redirect()->back()->with("success" , "le produit a été modifié avec succès");
        }
    }

    public function storproduit(Request $request, Produit $produit)
    {

        request()->validate([
            "titre" => ["required"],
            "prix" => ["required"],
            "stock" => ["required"],
            "categorie" => ["required"],
        ]);

        $image = $request->file("image");


        $image->storePublicly('imgs/product/', 'public');



        $data = [
            "titre" => $request->titre,
            "prix" => $request->prix,
            "stock" => $request->stock,
            "categorie" => $request->categorie,
            "createur" => 0,
            "image" => $image->hashName(),
        ];


        $produit->create($data);
        return redirect()->back()->with("success" , "le produit a été ajouter avec succès");
    }
}
