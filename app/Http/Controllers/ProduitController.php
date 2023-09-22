<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\Boitemail;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Type\Decimal;

class ProduitController extends Controller
{
    public function index(){
        $categories= Categorie::all();
        $produits= Produit::all();
        return view('backend.allproduit' , compact("categories" , "produits"));
    }

    public function destroyproduit(Produit $produit)
    {
        $produit->delete();
        return redirect()->back();
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

        $image->storePublicly('imgs/product/', 'public');
        $data = [
            "titre" => $request->titre,
            "prix" => $request->prix,
            "stock" => $request->stock,
            "categorie" => $request->categorie,
            "createur" => 1,
            // "image" => $image->hashName(),
        ];

        
        $produit->update($data);       
        return redirect()->back();
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
        return redirect()->back();
    }


    public function sendmail(Request $request){

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        // $request->email;

        // dd($request->email);


        $user = Auth::user();

        $DemoMail= [
            "email" => "chihaaaaaja",
            "name" => $user->name,
        ];

        Mail::to($request->email)->send(new DemoMail($DemoMail));

        return redirect()->back();
    }

    public function boitemail(){
        $messages = Boitemail::all();
        return view('backend.boitemail', compact('messages'));
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

        
        $boitemail->create($data);       
        return redirect()->back();
    }

    public function updatmessage(Request $request, Boitemail $message)
    {
        $message->update(["show" => 1]);       
        return redirect()->back();
    }
}
