@extends('partes/home')

@section('contenido')
    
@if ($usuario)
    <td>{{$usuario->Nombre}}</td>
    <td>{{$usuario->Apellido}}</td>
    <td>{{$usuario->Telefono}}</td>
    <td>{{$usuario->Email}}</td>
@endif

@endsection