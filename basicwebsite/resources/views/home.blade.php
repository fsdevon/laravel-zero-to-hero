@extends('layouts.app')

@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
  aliqua. Mollis aliquam ut porttitor leo. Eget felis eget nunc lobortis. Aliquet porttitor lacus luctus accumsan tortor
  posuere ac. Felis eget velit aliquet sagittis id consectetur.</p>

@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</p>
@endsection