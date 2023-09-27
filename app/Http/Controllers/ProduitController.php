<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\Boitemail;
use App\Models\Categorie;
use App\Models\Info;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Decimal;

class ProduitController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $produits = Produit::all();
        return view('backend.admin.produit.produit', compact("categories", "produits"));
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
                "createur" => 1,
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
                "createur" => 1,
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
            "createur" => 1,
            "image" => $image->hashName(),
        ];


        $produit->create($data);
        return redirect()->back()->with("success" , "le produit a été ajouter avec succès");
    }


    public function sendmail(Request $request)
    {

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = Auth::user();

        $DemoMail = [
            "name" =>  $request->email,
        ];

        Mail::to($request->email)->send(new DemoMail($DemoMail));

        return redirect()->back()->with("success" , "le email a été envoiyer avec succès");
    }

    public function boitemail()
    {
        $messages = Boitemail::all();
        
        return view('backend.admin.message.boitemail', compact('messages'));
    }


    public function storemessage(Request $request, Boitemail $boitemail)
    {

        request()->validate([
            "name" => ["required"],
            "message" => ["required"],
            "email" => ["required"],
            "sujet" => ["required"],
        ]);



        $data = [
            "name" => $request->name,
            "message" => $request->message,
            "email" => $request->email,
            "sujet" => $request->sujet,
            "show" => 0,
        ];

        $DemoMail = [
            "email" => $request->message,
            "name" =>  $request->message,
        ];

        Mail::to($request->email)->send(new DemoMail($DemoMail));

        $boitemail->create($data);
        return redirect()->back()->with("success" , "le email a été envoiyer avec succès");
    }

    public function updatmessage(Request $request, Boitemail $message)
    {
        $message->update(["show" => 1]);
        return redirect()->back();
    }




    public function updateinfo(Request $request, Info $info)
    {

        request()->validate([
            "adresse" => ["required"],
            "tel" => ["required"],
            "email" => ["required"],
        ]);



        $data = [
            "adresse" => $request->adresse,
            "tel" => $request->tel,
            "email" => $request->email,
        ];


        $info->update($data);
        return redirect()->back()->with("success" , "les infos de site web a été Modifier avec succès");
    }
}
