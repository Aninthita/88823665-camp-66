@extends('layouts.default')

@section('content')
<h1>Index</h1>
<a href="{{ url('/login') }}">Login</a>
<a href="{{ url('/register') }}">Register</a>
@endsection
