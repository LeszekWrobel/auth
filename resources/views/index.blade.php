@extends('layouts.app')

@section('menuwelcome')
<a class="btn btn-outline-dark" href="{{ url('/add') }}">Dodaj Ogłoszenie</a>
@endsection

@section('content')
<div class="container">
  <table class="table table-hover">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <tr>
      <th>Nr umowy</th>
      <th>imie</th>
      <th>E-mail</th>
      <th>Cenau z umowy</th>
    </tr>
    @foreach ($umowas as $umowa)
      <tr>
        <td>{{$umowa->nr}}</td>
        <td>{{$umowa->imie}}</td>
        <td>{{$umowa->mail}}</td>
        <td>{{$umowa->cenaum}}</td>
      </tr>
    @endforeach
  </table>
</div>
@endsection
