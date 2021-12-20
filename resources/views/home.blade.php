@extends('layouts.app')

@section('content')
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Image</th>
            <th>Title</th>
        </tr>
    </thead>

    <tbody>
        @foreach($images as $image)
        <tr>
    
            <td>
            <a href="{{ route('show', ['id' => $image->id]) }}">
                <img class="imgCard" src="{{ asset('storage') . '/' . $image->image }}" alt="">
            </a>
            </td>
            
            <td>{{ $image->image}}</td>
            <td>{{ $image->title}}</td>
        
    
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
