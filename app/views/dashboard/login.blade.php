@extends('layout')
@section('content')
  <h1>Login!</h1>
  {{ Form::open(array('url' => 'login', 'method' => 'post')) }}
    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::text('email', '', array('placeholder' => 'Email Address:')) }}
      </div>
    </div>

    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::password('password', array('placeholder' => 'Password:')) }}
      </div>
    </div>

    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::submit('Login', array('class' => 'button')) }}
      </div>
    </div>
  {{ Form::close() }}
@stop