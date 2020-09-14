@extends('layouts.profile')

@section('content')
    <div class="container py-4">

        @if (auth()->check())
            <div class="wrapper__add-button">
                <div class="add-button__container">
                    <a href="{{route('create')}}" class="link_add-button">
                        <i class="fa fa-plus fa-6x"></i>
                    </a>
                </div>
            </div>
        @endif

    </div>
@stop



