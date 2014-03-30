@extends('layout')
@section('content')
  <h1>Laravel Todo</h1>
  <p>This is a simple Todo app built on Laravel. Please login or create an account to get started.</p>
  {{ link_to_route('user.create', 'Create Account', null, array('class' => 'button')) }}
  {{ link_to_action('DashboardController@login', 'Login ', null, array('class' => 'button')) }}
@stop