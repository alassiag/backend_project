@extends('base')
@section('title') Create @endsection
@section('content')
<form action="{{route('post.store') }}" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label">Resumen</label>
        <textarea name="summary" id="summary" cols="30" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="author" name="author">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
