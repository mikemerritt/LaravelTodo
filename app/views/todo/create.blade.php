@extends('layout')
@section('content')
  <h1>Create New Todo List</h1>
  
  @if (isset($messages))
    <div class="errors">
      <ul>
        @foreach ($messages as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{ Form::model($todo, array('route' => array('todo.store'))) }}
    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::text('title', '', array('placeholder' => 'List Title:')) }}
      </div>
    </div>
    <div class="row collapse">
      <div class="small-12 column">
        {{ Form::submit('Create Todo List', array('class' => 'button')) }}
      </div>
    </div>
  {{ Form::close() }}
@stop