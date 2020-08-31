@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between">{{ $listing->name }}
        <a href="/" class="btn btn-dark btn-sm">Go Back</a>
      </div>

      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item">Name: {{ $listing->name }}</li>
          <li class="list-group-item">Website: <a href="{{ $listing->website }}"
              target="_blank">{{ $listing->website }}</a></li>
          <li class="list-group-item">Email: {{ $listing->email }}</li>
          <li class="list-group-item">Phone: {{ $listing->phone }}</li>
          <li class="list-group-item">Address: {{ $listing->address }}</li>
          <li class="list-group-item">Bio: {{ $listing->bio }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection