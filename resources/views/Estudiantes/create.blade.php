@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario para registro de estudiantes</h3>

    <form action="{{url('/estudiantes')}}" method="POST">
    @csrf 
    <label for="">Numero de estudiantes: </label>
    <input type="text" name="id" placeholder="No. estudiante" class="form-control mb-2">
    
    <label for="">Numero de documento: </label>
    <input type="text" name="numdocumento" placeholder="numdocumento" class="form-control mb-2">

    <label for="">Nombres: </label>
    <input type="text" name="nombres" placeholder="Nombres" class="form-control mb-2">

    <label for="">Apellidos: </label>
    <input type="text" name="apellidos" placeholder="Apellidos" class="form-control mb-2">

    <label for="">Email: </label>
    <input type="text" name="email" placeholder="Email" class="form-control mb-2">

    <label for="">Celular: </label>
    <input type="text" name="celular" placeholder="Celular" class="form-control mb-2">

    <label for="">Perfil: </label>
    <input type="text" name="perfil" placeholder="Perfil" class="form-control mb-2">

    <button class="btn btn-primary btn-block" type="submit">Insertar</button>
    </form>
@endsection  