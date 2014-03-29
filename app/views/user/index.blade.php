@extends('layout')
@section('content')
  <h1>Manage Users</h1>
  {{ link_to_route('user.create', 'Add User', null, array('class' => 'button')) }}
  <h2>All Users</h2>
  @foreach ($users as $user) 
    <p>{{ $user->name }} ({{ $user->email }}) 
    {{ link_to_route('user.destroy', 'Remove', array('user' => $user->id), array('class' => 'button small alert', 'data-method' => 'delete', 'data-confirm' => 'Are you sure?')) }}</p>
  @endforeach
@stop