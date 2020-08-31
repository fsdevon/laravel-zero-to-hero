@extends('layouts.app')

@section('content')
<a class="btn btn-light" href="/">Go Back</a>
<h1>{{ $todo->text }}
</h1>
<div><span class="badge badge-danger">{{ $todo->due }}</span></div>
<hr />
<p>{{ $todo->body }}</p>
<br /><br />
<div class="d-flex justify-content-between">
  <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
  {!! Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => "DELETE"]) !!}
  {{-- {{ Form::hidden('_method', "DELETE") }} --}}
  {{ Form::bsSubmit("Delete", ["class" => "btn btn-danger"]) }}
  {!! Form::close() !!}
</div>
@endsection