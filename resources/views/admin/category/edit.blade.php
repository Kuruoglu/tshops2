@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <form action="{{ route('category.update', ['category' => $category->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.category._form')
        </form>
    </div>
@stop
