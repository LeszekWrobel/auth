<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\umowa;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'nr' => 'required',
        'cenaum' => 'required',
        'imie' => 'required',
        'miasto' => 'required',
        'mail' => 'required|email',

        ]);
      //$ip = $_SERVER['REMOTE_ADDR'];//identyfikacja ip
      //$date = date('Y-m-d');

      // Create New Message
      $message = new umowa;
      $message->date = $request->input('date' );
      $message->ip = $request->input('ip');
      $message->dataum = $request->input('dataum');
      $message->nr = $request->input('nr');
      $message->cenaum = $request->input('cenaum');
      //  $cena=$cenaum+$cenaum*25/100;
      $message->cena = $request->input('cena');
      $message->nazwasukni = $request->input('nazwasukni');
      $message->firma = $request->input('firma');
      $message->rozmiar = $request->input('rozmiar');
      $message->opis = $request->input('opis');
      $message->imie = $request->input('imie');
      $message->nazwisko = $request->input('nazwisko');
      $message->pesel = $request->input('pesel');
      $message->miasto = $request->input('miasto');
      $message->kod_pocztowy = $request->input('kod_pocztowy');
      $message->adres = $request->input('adres');
      $message->tel = $request->input('tel');
      $message->mail = $request->input('mail');
      $message->zdjecie = $request->input('zdjecie');
      $message->iduzytkownicy = $request->input('iduzytkownicy');
      //Save Message
      $message->save();
      //Redirect
      return redirect('/kontakt')->with('success','Suknia została dodana i oczekuje na zatwierdzenie przez administratora.');
    }
}
