@extends('layouts.php')
@<section>('content')
  <table class="table table-hover">
    @foreach ($users as $user):
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
      </tr>
    @endforeach
  </table>

</section>
