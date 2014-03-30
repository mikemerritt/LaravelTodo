@extends('layout')
@section('content')
  <h1>Users</h1>
  
  <ul>
    @foreach ($users as $user)
      <li>{{ $user->name }} - {{ $user->email }} - {{ $user->password }}</li>
    @endforeach
  </ul>
@stop