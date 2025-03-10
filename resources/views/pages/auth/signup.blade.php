@extends('layouts.main')

@section('title', 'Sign Up')

@section('content')

<div class="container mt-5">

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>
              {{ $error }}
          </li>                   
          @endforeach
      </ul>
  </div>
  @endif

  <form action="{{ route('auth.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>



@endsection