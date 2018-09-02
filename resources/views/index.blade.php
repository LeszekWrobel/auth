@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Dodaj suknie</h1>
  <div class="row justify-content-center">
      <div class="col-md-6">
        {!! Form::open(['url' => 'kontakt/submit']) !!}
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('date', 'Data')}}
          </div>
          <div class="col-md-5">
            {{date("d,m,y")}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('nr', 'Nr umowy')}}
          </div>
          <div class="col-md-5">
            {{Form::text('nr', '',['class' => 'form-control-sm', 'placeholder' => 'Nr umowy/'.date("y")])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('dataum', 'Data umowy')}}
          </div>
          <div class="col-md-5">
            {{Form::date('dataum', \Carbon\Carbon::now(),['class' => 'form-control-sm'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('cenaum', 'Cena z umowy')}}
          </div>
          <div class="col-md-5">
            {{Form::text('cenaum', '',['class' => 'form-control-sm', 'placeholder' => 'Cena z umowy'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('nazwasukni', 'Nazwa sukni')}}
          </div>
          <div class="col-md-5">
            {{Form::text('nazwasukni', '',['class' => 'form-control-sm', 'placeholder' => 'Nazwa sukni'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('firma', 'Producent')}}
          </div>
          <div class="col-md-5">
            {{Form::text('firma', '',['class' => 'form-control-sm', 'placeholder' => 'Producent'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('rozmiar', 'Rozmiar')}}
          </div>
          <div class="col-md-5">
            {{Form::text('rozmiar', '',['class' => 'form-control-sm', 'placeholder' => 'Rozmiar'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2">
            {{Form::label('opis', 'Opis')}}
          </div>
          <div class="col-md-10">
            {{Form::textarea('opis', '',['class' => 'form-control', 'placeholder' => 'Opis'])}}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('imie', 'Imię')}}
          </div>
          <div class="col-md-5">
            {{Form::text('imie', '',['class' => 'form-control-sm', 'placeholder' => 'Imię'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('nazwisko', 'Nazwisko')}}
          </div>
          <div class="col-md-5">
            {{Form::text('nazwisko', '',['class' => 'form-control-sm', 'placeholder' => 'Nazwisko'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('pesel', 'Pesel')}}
          </div>
          <div class="col-md-5">
            {{Form::text('pesel', '',['class' => 'form-control-sm', 'placeholder' => 'Pesel'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('miasto', 'Miasto')}}
          </div>
          <div class="col-md-5">
            {{Form::text('miasto', '',['class' => 'form-control-sm', 'placeholder' => 'Miasto'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('kod_pocztowy', 'Kod_pocztowy')}}
          </div>
          <div class="col-md-5">
            {{Form::text('kod_pocztowy', '',['class' => 'form-control-sm', 'placeholder' => 'Kod_pocztowy'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('adres', 'Adres')}}
          </div>
          <div class="col-md-5">
            {{Form::text('adres', '',['class' => 'form-control-sm', 'placeholder' => 'Adres (ulica, nr domu/mieszkania)'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('tel', 'Telefon')}}
          </div>
          <div class="col-md-5">
            {{Form::text('tel', '',['class' => 'form-control-sm', 'placeholder' => 'Telefon'])}}
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-5">
            {{Form::label('mail', 'E-Mail')}}
          </div>
          <div class="col-md-5">
            {{Form::text('mail', '',['class' => 'form-control-sm', 'placeholder' => 'E-Mail'])}}
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-5">
            {{Form::submit('Zatwierdż',['class' => 'btn btn-primary'])}}
          </div>
          <div class="col-md-5">
            {{Form::reset('Czyść',['class' => 'btn btn-primary'])}}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <table class="table table-hover">
      @foreach ($users as $user):
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
        </tr>
      @endforeach
    </table>
</div>
@endsection
