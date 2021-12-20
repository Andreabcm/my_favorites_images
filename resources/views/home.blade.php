@extends('layouts.app')

@section('content')

 
        @foreach ($images as $image)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $image->image }}" alt="Card image cap">
                    <div class="card-body">
                            <h5 class="card-title">{{ $image->id }} {{ $image->title }}</h5>
                    </div>
            </div>
        @endforeach

@endsection

