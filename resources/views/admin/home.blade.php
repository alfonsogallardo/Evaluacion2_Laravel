@extends('layouts.main')
@section('main-content')

<div class="container py-4">
    <div class="d-flex justify-content-end">

    </div>
    @if($errors->any())
        <div class="alert alert-danger my-4" role="alert">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">ArriendAPP</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Arriendos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-primary" href="{{ route('logout') }}">Cerrar Sesion</button>
      </form>
    </div>
  </div>
</nav>


<div class="container-mt5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="text-left mb-4">Dashboard</h1>
            <h2 class="text-left mb-4">Vehiculos existentes en cada categoria</h2>

            <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Total de Vehiculos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->vehicles->count()}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Total arriendos registrados</h5>
                <p class="card-text">{{$totalVehicles}}</p>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection


@push('css')
<style>
    .section-separator {
        margin-top: 80px;
    }
</style>
@endpush
