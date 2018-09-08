<div class="col-12">
<div class="row">
  <div class="row mr-4">
 <div class="col-12">
   <div class="form-group row">
     <div class="col">
       {{Form::label('date', 'Data')}}
     </div>
     <div class="col">
       {{date("Y-m-d")}}
       <!-- 'class' => 'sr-only' = pola ukryte -->
       {{Form::text('date', date("Y-m-d"),['class' => 'sr-only', ])}}
       {{Form::text('ip', $_SERVER['REMOTE_ADDR'],['class' => 'sr-only', ])}}
     </div>
   </div>
   <div class="form-group row">
     <div class="col">
       {{Form::label('nr', 'Nr umowy *')}}
     </div>
     <div class="col">
       {{Form::text('nr', '',['class' => 'form-control-sm', 'placeholder' => 'Nr umowy/'.date("y")])}}
     </div>
   </div>
   <div class="form-group row">
     <div class="col">
       {{Form::label('dataum', 'Data umowy *')}}
     </div>
     <div class="col">
       {{Form::date('dataum', \Carbon\Carbon::now(),['class' => 'form-control-sm'])}}
     </div>
   </div>
   <div class="form-group row">
     <div class="col">
       {{Form::label('cenaum', 'Cena z umowy *')}}
     </div>
     <div class="col">
       {{Form::text('cenaum', '',['class' => 'form-control-sm', 'placeholder' => 'Cena z umowy'])}}
     </div>
   </div>
   <!-- dodaje 25% ceny do ceny z umowy (cena w komisie)+$cenaum*25/100 -->
   <!-- <?php // $cena=$cenaum; ?> -->
   <!-- {{Form::text('cena', 'cenaum',['class' => '', ])}} -->
   <div class="form-group row">
     <div class="col">
       {{Form::label('nazwasukni', 'Nazwa sukni')}}
     </div>
     <div class="col">
       {{Form::text('nazwasukni', '',['class' => 'form-control-sm', 'placeholder' => 'Nazwa sukni'])}}
     </div>
   </div>
   <div class="form-group row">
     <div class="col">
       {{Form::label('firma', 'Producent')}}
     </div>
     <div class="col">
       {{Form::text('firma', '',['class' => 'form-control-sm', 'placeholder' => 'Producent'])}}
     </div>
   </div>
   <div class="form-group row">
     <div class="col">
       {{Form::label('rozmiar', 'Rozmiar')}}
     </div>
     <div class="col">
       {{Form::text('rozmiar', '',['class' => 'form-control-sm', 'placeholder' => 'Rozmiar'])}}
     </div>
   </div>
   <div class="form-group row">
     <div class="col">
       {{Form::label('opis', 'Opis')}}
     </div>
     <div class="col">
       {{Form::textarea('opis', '',['class' => 'form-control-sm', 'placeholder' => 'Opis', 'rows' => '6', 'cols' => '20'])}}
     </div>
   </div>
 </div>


 </div>
 <div class="row">
   <div class="col-12">
     <div class="form-group row ">
       <div class="col">
         {{Form::label('imie', 'Imię *')}}
       </div>
       <div class="col">
         {{Form::text('imie', '',['class' => 'form-control-sm', 'placeholder' => 'Imię'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('nazwisko', 'Nazwisko')}}
       </div>
       <div class="col">
         {{Form::text('nazwisko', '',['class' => 'form-control-sm', 'placeholder' => 'Nazwisko'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('pesel', 'Pesel')}}
       </div>
       <div class="col">
         {{Form::text('pesel', '',['class' => 'form-control-sm', 'placeholder' => 'Pesel'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('miasto', 'Miasto *')}}
       </div>
       <div class="col">
         {{Form::text('miasto', '',['class' => 'form-control-sm', 'placeholder' => 'Miasto'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('kod_pocztowy', 'Kod pocztowy')}}
       </div>
       <div class="col">
         {{Form::text('kod_pocztowy', '',['class' => 'form-control-sm', 'placeholder' => 'Kod_pocztowy'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('adres', 'Adres')}}
       </div>
       <div class="col">
         {{Form::text('adres', '',['class' => 'form-control-sm', 'placeholder' => 'Adres (ulica, nr domu/mieszkania)'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('tel', 'Telefon')}}
       </div>
       <div class="col">
         {{Form::text('tel', '',['class' => 'form-control-sm', 'placeholder' => 'Telefon'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('mail', 'E-Mail *')}}
       </div>
       <div class="col">
         {{Form::email('mail', '',['class' => 'form-control-sm', 'placeholder' => 'E-Mail'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('zdjecie', 'Zdjęcie 0 lub 1')}}
       </div>
       <div class="col">
         {{Form::text('zdjecie', '',['class' => 'form-control-sm', 'placeholder' => 'Zdjęcie 0 lub 1'])}}
       </div>
     </div>
     <div class="form-group row">
       <div class="col">
         {{Form::label('iduzytkownicy', 'Id uzytkownika')}}
       </div>
       <div class="col">
         {{Form::text('iduzytkownicy', '',['class' => 'form-control-sm', 'placeholder' => 'iduzytkownicy'])}}
       </div>
     </div>
       *  pola wymagane
   </div>
  </div>
</div>
</div>
