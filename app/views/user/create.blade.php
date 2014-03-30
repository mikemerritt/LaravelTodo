@extends('layout')
@section('content')
  <h1>Create Account</h1>
  
  @if (isset($messages))
    <div class="errors">
      <ul>
        @foreach ($messages as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{ Form::model($user, array('route' => array('user.store'))) }}
    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::text('name', '', array('placeholder' => 'Name:')) }}
      </div>
    </div>

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
        {{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password:')) }}
      </div>
    </div>

    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::submit('Create Account', array('class' => 'button')) }}
      </div>
    </div>
  {{ Form::close() }}
@stop