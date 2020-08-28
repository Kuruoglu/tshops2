@extends('admin.layouts.index')
@section('content')
    <div class="container">
        <form action="{{route('user.store')}}" method="post">
            @csrf
            @include('admin.user._form')
        </form>
    </div>
@stop

