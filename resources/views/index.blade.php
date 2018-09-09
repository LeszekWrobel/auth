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
      <th>Akcja</th>
    </tr>
    @foreach ($umowas as $umowa)
      <tr>
        <td>{{$umowa->nr}}</td>
        <td>{{$umowa->imie}}</td>
        <td>{{$umowa->mail}}</td>
        <td>{{$umowa->cenaum}}</td>
        <td>
          <a class="btn btn-outline-info" href="{{route('index.edit', $umowa->id)}}">Edycja</a>
           <form class="" action="{{route('index.destroy', $umowa->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Usuń</button>
          </form>
          </td>
      </tr>
    @endforeach
  </table>
  {{$umowas->links()}}
</div>
@endsection
