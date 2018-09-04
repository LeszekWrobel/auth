<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class umowa extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'date', 'ip', 'dataum', 'nr', 'cenaum', 'cena', 'nazwasukni', 'firma', 'rozmiar', 'opis', 'imie', 'nazwisko', 'pesel', 'miasto', 'kod_pocztowy', 'adres', 'tel', 'mail', 'zdjecie', 'iduzytkownicy',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  // protected $hidden = [
  //     'password', 'remember_token',
  // ];
   }
