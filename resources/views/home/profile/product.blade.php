@extends('layouts.profile')

@section('sidebar')
    <div class="container mt-3 d-flex flex-md-wrap" style="max-height: 350px">
        <div class="wrapper__add-button ">
            <div class="add-button__container">
                <a href="{{route('create')}}" class="link_add-button">
                    <i class="fa fa-plus fa-6x"></i>
                </a>
            </div>
        </div>

        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{$product->img}}" class="card-img-top" alt="{{'img'}}">
                <div class="card-body d-flex flex-md-column">
                    <p class="card-text">{{$product->name}}</p>
                    <p class="card-text">{{$product->price}}</p>
                    <a href="" class="btn btn-danger align-self-end text-center">Удалить</i></a>
                </div>

            </div>
        @endforeach

    </div>
@stop

