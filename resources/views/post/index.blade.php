@extends('base')
@section('title') Inicio @endsection
@section('content')
    <table class = "table" >
        <thead>
            <tr>
                <th>{{"ID"}}</th>
                <th>{{"TITLE"}}</th>
                <th>{{"AUTHOR"}}</th>
                <th>{{"ACCIONES"}}</th>
            </tr>
        </thead>
         <tbody>
             @if (count($posts) >= 1)
                @foreach ($posts as $post)
                <tr>
                     <td scope ="row"> {{ $post->id }} </td>
                     <td>{{ $post->title }}</td>
                     <td>{{ $post->author }}</td>
                     <td>
                         <a href="{{ route("post.edit", $post->id) }}" class="btn btn-sm btn-primary">Editar</a>
                         <form action="{{route ("post.destroy", $post->id)}}" method="post">
                                 {{ csrf_field() }}
                                 {{ method_field("DELETE")}}
                                 <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(' Desea eliminar este registro ?')">Eliminar</button>
                        </form>
                     </td>
                </tr>
                @endforeach
             @else
                <tr>
                    <td scope ="row"> {{ " no encontro resultados" }} </td>
                </tr>
             @endif
         </tbody>
    </table>
@endsection
