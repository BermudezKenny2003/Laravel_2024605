@extends('Plantilla')
@section('secciondinamica')
    <h1>Lista de usuarios registrados</h1>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Numdocumento</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Email</th>
      <th scope="col">Celular</th>
      <th scope="col">Fecha_alta</th>
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->numdocumento}}</td>
      <td>{{$dato->nombres}}</td>
      <td>{{$dato->apellidos}}</td>
      <td>{{$dato->email}}</td>
      <td>{{$dato->celular}}</td>
      <td>{{$dato->fecha_alta}}</td>
      <td>
      <a href="{{url('usuarios/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('usuarios.destroy', $dato) }}" class="d-inline" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
      </form>
    
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection