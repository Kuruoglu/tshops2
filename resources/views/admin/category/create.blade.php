@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <form action="{{route('category.store')}}" methos="post">
            @csrf
            @include('admin.category._form')
        </form>
    </div>
@stop
