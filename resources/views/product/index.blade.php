@extends('layouts.profile')

@section('content')
    <div class="container py-4 d-flex">

        @if (auth()->check())
            <div class="wrapper__add-button">
                <div class="add-button__container">
                    <a href="{{route('create')}}" class="link_add-button">
                        <i class="fa fa-plus fa-6x"></i>
                    </a>
                </div>
            </div>
        @endif
        @foreach($products as $product)

                <div class="card mx-3" style="width: 18rem;">
                    <a href="">

                    <img src="{{$product->img}}" class="card-img-top" alt="{{'img'}}">
                    </a>
                    <div class="card-body">
                        <p class="card-text">{{$product->name}}</p>
                        <p class="card-text">{{$product->price}} грн.</p>
                    </div>
                </div>
        @endforeach

    </div>
@stop



