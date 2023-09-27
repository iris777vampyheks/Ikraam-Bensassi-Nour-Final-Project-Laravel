<?php

namespace App\Http\Controllers;

use App\Models\ContactMail;
use Illuminate\Http\Request;

class ContactMailController extends Controller
{
public function index(){
    $contactMails = ContactMail::all();
}
}
