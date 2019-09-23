@extends('layouts.app')

@section('title')
  Todo: {{ $todo->name }}
@endsection

@section('content')
  <h1 class="text-center my-5">
    {{ $todo->name }}
  </h1>
  <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            Details
          </div>

          <div class="card-body">
            {{ $todo->description }}
          </div>
        </div>
      </div>
      <div class="row container-fluid justify-content-center my-0">
        <div class="col-md-6">
          <a href="/todos/{{$todo->id}}/edit" class="btn btn-block btn-warning">Edit</a>
          <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-block float-right">Delete</a>
        </div>
      </div>
  </div>
@endsection
