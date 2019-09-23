@extends('layouts.app')

@section('title')
  Todo list
@endsection

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="container">
        <h1 class="text-center my-5">TODOS PAGE</h1>
        <div class="card card-default">
          <div class="card-header">
            TODOS
            <a href="#" class="btn btn-primary float-right">Add</a>
          </div>
          <div class="card-body">
            <ul class="list-group">
              @foreach($todos as $todo)
                <li class="list-group-item">
                  {{ $todo->name }}
                  <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                  <a href="todos/{{$todo->id}}/edit" class="btn btn-warning btn-sm float-right mx-1">Edit</a>
                  <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm float-right">Delete</a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
