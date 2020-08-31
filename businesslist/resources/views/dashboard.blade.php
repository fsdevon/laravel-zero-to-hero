@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between">{{ __('Dashboard') }}
        <a href="/listing/create" class="btn btn-success btn-sm">Add Listing</a>
      </div>

      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

        {{-- {{ __('You are logged in!') }} --}}
        <h3>Your Listings</h3>
        @if(count($listings))
        <table class="table table-striped">
          <tr>
            <th>Company</th>
            <th></th>
            <th></th>
          </tr>
          @foreach ($listings as $listing)
          <tr>
            <td>{{$listing->name}}</td>
            <td><a class="btn btn-success" href="/listing/{{ $listing->id }}/edit">Edit</a></td>
            <td>
              {!! Form::open(['action' => ['ListingController@destroy', $listing->id], 'method' => "DELETE", 'onsubmit'
              => 'return confirm("Are you sure?")']) !!}
              {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
              {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </table>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection