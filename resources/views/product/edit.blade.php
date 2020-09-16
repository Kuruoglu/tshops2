@extends('layouts.app')

@section('content')
    <div class="container">
        @include('_messages')
        <form action="{{route('update', $product)}}" class="mt-3" method="post" enctype="multipart/form-data">
            @csrf
          @include('product._form')
        </form>
    </div>

@stop
