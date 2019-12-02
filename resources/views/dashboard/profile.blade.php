@extends('layouts.dashboard')

@section('content')

<div class="container">
    <h1 class="font-weight-light">Profile</h1>

    <div class="mt-5">
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
    </div>

</div>

@endsection
