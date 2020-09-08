@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('admin.brand._form')
        </form>
    </div>
@stop
