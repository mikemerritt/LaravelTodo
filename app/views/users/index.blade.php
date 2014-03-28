@extends('layout')

@section('content')
  <h1>Users</h1>
  <a href="/users/new">Add User</a>
  @foreach ($users as $user) 
    <p>{{ $user->name}}</p>
  @endforeach
@stop