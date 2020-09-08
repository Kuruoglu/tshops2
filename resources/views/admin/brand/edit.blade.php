@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <form action="{{ route('brand.update', $brand )}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.brand._form')
        </form>
    </div>
@stop
