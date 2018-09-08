<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\umowa;

class MessagesController extends Controller
{
    
    public function index()
    {
      $umowas = umowa::all();
      return view('index',compact('umowas'));
    }

}
