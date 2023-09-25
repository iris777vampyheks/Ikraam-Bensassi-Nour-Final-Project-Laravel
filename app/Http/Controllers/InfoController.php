<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        $infos= Info::all();
        return view('backend.admin.info.info' ,compact('infos'));
    }

    public function contact(){
        $infos= Info::all();
        return view('frontend.contact.contact' ,compact('infos'));
    }
}
