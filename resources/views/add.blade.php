@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center pl-3">
    {!! Form::open(['url' => 'add/submit']) !!}
    <h3>Dodaj suknie :</h3>
    @include ('inc.errors')
    @include ('inc.formadd')
  <div class="form-group row">
    <div class="col">
      {{Form::reset(' Czyść ',['class' => 'btn btn-primary '])}}
    </div>
    <div class="col">
      {{Form::submit('Zatwierdż',['class' => 'btn btn-success '])}}
    </div>
  </div>
      {!! Form::close() !!}
  </div>
</div>
@endsection
