@extends('layouts.app')
@section('content')
<h1>Dodaj suknie</h1>
{!! Form::open(['url' => 'kontakt/submit']) !!}
<div class="form-group">
  {{Form::label('email', '',['class' => 'form-control', 'placeholder' => 'Nr umowy'])}}
  {{Form::text('email', 'example@gmail.com')}}
</div>
<div class="form-group">
  {{Form::label('email', 'E-Mail Address')}}
  {{Form::text('email', 'example@gmail.com')}}
</div>
  <div class="form-group">
    {{Form::label('email', 'E-Mail Address')}}
    {{Form::text('email', 'example@gmail.com')}}
  </div>
{!! Form::close() !!}
@endsection
