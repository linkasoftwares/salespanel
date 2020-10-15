@extends('layouts.auth')

@section('auth_title')
    Registar
@endsection

@section('auth_content')
<div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Crriar nova conta!</h1>
                </div>
                <form class="user" method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="first_name" @error('first_name') is-invalid @enderror" class="form-control form-control-user" id="first_name" placeholder="Primeiro Nome">
                      @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="last_name" @error('last_name') is-invalid @enderror" class="form-control form-control-user" id="last_name" placeholder="Último Nome">
                      @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" @error('email') is-invalid @enderror" class="form-control form-control-user" id="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" name="password" @error('password') is-invalid @enderror" class="form-control form-control-user" id="passoword" placeholder="Senha" required autocomplete="new-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="col-sm-6">
                      <input type="password" name="password_confirmation" class="form-control form-control-user" id="password" placeholder="Confirmar senha" required autocomplete="new-password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Registar</button>
                  {{-- <a href="#" class="btn btn-primary btn-user btn-block">
                    Registar
                  </a> --}}
                  <hr>
                  {{-- <a href="#" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Registar com Google
                  </a>
                  <a href="#" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Registar com Facebook
                  </a> --}}
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="{{ route('login') }}">Já tem uma conta criada? Inciar sessão!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection