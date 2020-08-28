@extends('admin.layouts.index')
@section('content')
    <div class="container">
        <form action="{{route('user.update', $user)}}" method="post">
            @csrf
            @method('PUT')
            @include('admin.user._form')
        </form>
    </div>
@stop

