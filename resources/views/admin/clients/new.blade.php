@extends('layouts.next')

@section('app_content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
  <p class="mb-4">Registar novo Cliente.</p>

  {{-- <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-3">
          <form action="{{ route('clients.register') }}">
              @csrf

            <div class="form-group row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name="first_name" @error('first_name') is-invalid @enderror" class="form-control" id="first_name" placeholder="Primeiro Nome">
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>

                <div class="col-sm-3 mb-3 mb-sm-0">
                    <input type="text" name="last_name" @error('last_name') is-invalid @enderror" class="form-control" id="last_name" placeholder="Sobrenome">
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
            </div>
          </form>
      </div>
  </div> --}}

  <div class="border-0 shadow-lg my-5">
      <div class="p-3">
        <form action="{{ route('clients.register') }}" method="POST">
            @csrf
            <div class="col-sx-6">
                <div class="form-group col-sm-3 mb-3 mb-sm-0">
                    <label for="first_name">Primeiro Nome</label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="form-group col-sm-3 mb-3 mb-sm-0">
                    <label for="last_name">Segundo Nome</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
            </div>
            <div class="col-sx-6">
                <div class="form-group col-sm-3 mb-3 mb-sm-0">
                    <label for="email">Email</label>
                    <input type="emaol" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-sm-3 mb-3 mb-sm-0">
                    <label for="phone_number">Telefone</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                    </div>
            </div>
            <br>
            <br><br>
            <div class="form-group mb-sm-0">
                <button type="submit" class="btn btn-primary btn-icon-split">Registar</button>
            </div>
        </form>
      </div>
  </div>
@endsection
