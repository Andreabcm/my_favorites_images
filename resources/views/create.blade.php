@extends('layouts.app')

@section('content')

<form method="get" action="{{route('create')}}" enctype="multipart/form-data">
    @csrf

    <div class="container ct-create">
    <div class="card-header my-4"><label for="" class="d-flex justify-content-center text-md-right">{{ __('Crear Producto') }}</label></div>    
    </div>
    
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        <input type="file" name="image" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required autocomplete="title" autofocus>
    </div>
    
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <textarea type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required autocomplete="description" autofocus></textarea>
    </div>

    <div>
        <button type="submit" class="btn bt-create">Crear</button>
        <button type="submit" class="btn bt-cancel ml-3" onclick="window.location='{{route('home')}}';return false;">Cancelar</button>
    </div>
</form>   