@extends('partes/home')

@section('contenido')
    
    <table>
        <thead>Listado de Usuarios:</thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->Nombre}}</td>
                    <td>{{$usuario->Apellido}}</td>
                    <td>{{$usuario->Telefono}}</td>
                    <td>
                        <a href="{{route('usuarios.show',$usuario->Id)}}">Ver detalle</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection