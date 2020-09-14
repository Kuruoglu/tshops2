@extends('layouts.profile')

@section('sidebar')
    <div class="container mt-3">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{$product->img}}" class="card-img-top" alt="{{'img'}}">
                <div class="card-body">
                    <p class="card-text">{{$product->name}}</p>
                    <p class="card-text">{{$product->price}}</p>
                </div>
            </div>
        @endforeach
    </div>
@stop

