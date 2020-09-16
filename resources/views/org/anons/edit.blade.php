@extends('admin.layouts.index')


@section('content')

    <div class="container">
        @include('_messages')
        <form action="/organizer/anons/{{$anons->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method("PUT")
            <div class="jumbotron small-box">
                @include('org.anons._form')
            </div>
        </form>
    </div>
@stop
