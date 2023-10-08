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




    <section class="section-separator">
        <h5>Crear nuevas categorias</h5>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Nombre de la categoria" name="name">
            <input type="submit" value="Crear categoría">
        </form>
    </section>
    <hr />





    <section class="section-separator">
        <h5>Agregar vehiculos a una categoria</h5>
        <form action="{{ route('vehicles.store') }}" method="POST">
            @csrf
            <span>Categorias</span>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div class="input-group mt-2">
                <span class="input-group-text">Patente</span>
                <input type="text" class="form-control" name="patent">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Año</span>
                <input type="number" class="form-control" name="year">
            </div>
            <div class="input-group mt-2">
                <span class="input-group-text">Modelo</span>
                <input type="text" class="form-control" name="model">
            </div>

            <div class="input-group mt-2">
                <span class="input-group-text">Marca</span>
                <input type="text" class="form-control" name="brand">
            </div>
            <input type="submit" value="Agregar vehiculo" class="btn btn-primary mt-4">
        </form>
    </section>
    <hr />





    <h5 class="section-separator mb-4">Listar nuevas categorias</h5>
    @foreach($categories as $key => $category)
        <section class="mb-5">
            <h6>Categoría: {{ $category->name }} ( id: {{ $category->id }})</h6>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Patente</th>
                    <th scope="col">Año</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($category->vehicles as $vehicle)
                <tr>
                    <td scope="row">{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->patent }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->brand }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>
{{--
     IMPORTANTE

     Por defecto las solicitudes en los navegadores son post o get. Cuando uno define un metodo diferente para la ruta en laravel (en este caso delete),
     Debe enviar la petición dentro de un formulario y especificar el metodo con @method().
     El @csrf generará un token unico para el formulario que laravel gestiona por detrás de escena, con ello previene ataques maliciosos en los formularios
--}}
                        <form action="{{ route('vehicles.delete', ['id' => $vehicle->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-outline-secondary btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    @endforeach
</div>
@endsection


@push('css')
<style>
    .section-separator {
        margin-top: 80px;
    }
</style>
@endpush
