@extends('layouts.main')

@section('title', 'Home')

@section('content')

@php($_name = $name ?? "team")

    @if ($_name == "siti")
    <p>You are banned</p>

    @elseif ($_name == "nur")
    <h1>you are girl</h1>

    @else
    <h1>Hello, {{ $_name }}</h1>
    @endif

    <button type="button" class="btn btn-outline-primary">Click Me</button>
@endsection