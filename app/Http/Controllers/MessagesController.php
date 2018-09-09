<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\umowa;

class MessagesController extends Controller
{

    public function index()
    {
      // $umowas = umowa::all();
      //$umowas = umowa::orderBy('id','desc')->get();
      $umowas = umowa::orderBy('id','desc')->paginate(5);
        // {{$umowas->links}}
      return view('index',compact('umowas'));
    }

}
