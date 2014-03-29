@extends('layout')
@section('content')
  <h1>Create New User</h1>
  {{ Form::model($user, array('route' => array('user.store'))) }}
    {{ Form::text('name', '', array('placeholder' => 'Name:')) }}
    {{ Form::text('email', '', array('placeholder' => 'Email Address:')) }}
    {{ Form::submit('Create User') }}
  {{ Form::close() }}
@stop