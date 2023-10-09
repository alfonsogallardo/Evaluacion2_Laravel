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

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-left">
            <h1>Arriendos</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('home') }}" class="btn btn-primary">Nuevo Arriendo</a>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scop="col">Cliente</th>
                <th scop="col">Rut</th>
                <th scop="col">Patente</th>
                <th scop="col">Entrega</th>
                <th scop="col">Devolucion</th>
                <th scop="col">Eliminar</th>
            </tr>
        <tbody>
            @foreach ($leases as $key => $lease )
                <tr>
                    <td>{{$lease->nombre_cliente}} {{$lease->apellido_paterno}}</td>
                    <td>{{$lease->rut}}</td>
                    <td>{{ $lease->patente }}</td>
                        <td>{{ $lease->fecha_entrega }}</td>
                        <td>{{ $lease->fecha_devolucion }}</td>
                        <td>
                            <form action="{{ route('softDelete', $lease->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Eliminar</button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>




{{--
     IMPORTANTE

     Por defecto las solicitudes en los navegadores son post o get. Cuando uno define un metodo diferente para la ruta en laravel (en este caso delete),
     Debe enviar la petición dentro de un formulario y especificar el metodo con @method().
     El @csrf generará un token unico para el formulario que laravel gestiona por detrás de escena, con ello previene ataques maliciosos en los formularios
--}}

</div>
@endsection


@push('css')
<style>
    .section-separator {
        margin-top: 80px;
    }
</style>
@endpush
