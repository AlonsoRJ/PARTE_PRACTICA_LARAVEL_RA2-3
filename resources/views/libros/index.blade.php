@extends('layouts.app')
@section('content')
    @if($libros->isEmpty())
        <p>No hay libros registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Anio de publicacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection