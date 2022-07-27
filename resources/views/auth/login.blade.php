@extends('layout.auth')

@section('content')
<form class="login section" action="{{ route('authenticate') }}" method="POST">
    @csrf
    <i class="uil uil-user login__icon"></i>
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="button button--flex" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
@endsection