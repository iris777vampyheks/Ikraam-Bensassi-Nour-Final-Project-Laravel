<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produits=Produit::all();
        $shuffledProducts = $produits->shuffle()->take(3);



        return view('frontend.home.home' , compact('shuffledProducts','produits' ));
    }
}
