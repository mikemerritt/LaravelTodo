@extends('layout')
@section('content')
  <h1>{{ $todo->title }}</h1>
  <ul class="manage-lists">
    @foreach ($todo->items as $item)
      <li>{{ $item->description }}
      {{ link_to_route('item.destroy', 'Remove', array('item' => $item->id), array('class' => 'right remove', 
      'data-method' => 'delete', 'data-confirm' => 'Are you sure?')) }}</li>
    @endforeach
  </ul>

  <div>
    {{ Form::text('description', '', array('placeholder' => 'Description:')) }}
    <a id="add-item" class="button" href="#" data-todo-id="{{ $todo->id }}">Add</a>
  </div>
@stop