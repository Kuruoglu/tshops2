@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <form action="{{ route('org-brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('org.brand._form')
        </form>
    </div>
@stop
