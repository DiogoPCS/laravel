@extends('_partials.body')

@section('content')

<div class="container">
    <div class="login-container">
      <form action="{{ route('access') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3 form-check">
        </div>
        <button type="submit" class="btn btn-primary btn-login">Entrar</button>
        @if (session('message'))
            <div class="alert alert-warning m-3">{{ session('message') }}</div>
        @endif
      </form>
    </div>
  </div>

    

@endsection