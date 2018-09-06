@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Dodaj suknie</h1>
  <div class="row justify-content-center pl-5">
    {!! Form::open(['url' => 'kontakt/submit']) !!}
    @include ('inc.errors')
    @include ('inc.formadd')
  <div class="form-group row">
    <div class="col-md-6">
      {{Form::reset(' Czyść ',['class' => 'btn btn-primary btn-block'])}}
    </div>
    <div class="col-md-6">
      {{Form::submit('Zatwierdż',['class' => 'btn btn-success btn-block'])}}
    </div>
  </div>
      {!! Form::close() !!}
  </div>
  <table class="table table-hover">
    @foreach ($umowas as $umowa):
      <tr>
        <td>{{$umowa->nr}}</td>
        <td>{{$umowa->imie}}</td>
        <td>{{$umowa->mail}}</td>
        <div class="col-md-6">
        </div>
      </tr>
    @endforeach
  </table>
</div>
@endsection
