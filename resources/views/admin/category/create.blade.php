@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.category._form')
        </form>
    </div>
@stop
