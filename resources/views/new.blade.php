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

<div class="container">
    <h1>Nuevo Arriendo</h1>

    <div class= "container border p-4">

    <form action="{{ route('guardar_arriendo') }}" method="post">
                @csrf

                <div class="form-group">
                    <label>Datos del Cliente</label>
                   <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Nombres" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" required>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="RUT" required>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
                </div>

                <div class="form-group">
                    <label for="patente">Datos del Vehiculo</label>
                    <input type="text" class="form-control" id="patente" name="patente" placeholder="Patente" required>
                </div>

                <div class="form-group">
                    <label for="fecha_entrega">Sobre el prestamo</label>
                    <input type="text" class="form-control" id="fecha_entrega" name="fecha_entrega" placeholder="Fecha de Entrega" required>
                </div>

                <div class="form-group">
                   <input type="text" class="form-control" id="fecha_entrega" name="fecha_entrega" placeholder="Fecha de Entrega" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

            <div class="container mt-4">
    <h2>Vehiculos Disponibles</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Año</th>
                <th>Patente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->model }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>







</div>









@push('css')
<style>
    .section-separator {
        margin-top: 80px;
    }
</style>
@endpush

