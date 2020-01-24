@extends('layouts.next')

@section('app_content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
  <p class="mb-4">Lista de Clientes da <b>Estilo Bantu</b>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Localização</th>
              <th>Rede Social</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Localização</th>
              <th>Rede Social</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($clients as $client)
              <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone_number }}</td>
                <td>{{ $client->location }}</td>
                <td>{{ $client->social_link }}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@endsection
