@extends('admin.layouts.index')


@section('content')
    <div class="container">
        <form action="{{route('anons.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="jumbotron small-box">
                @include('org.anons._form')
            </div>
        </form>
    </div>
@stop
