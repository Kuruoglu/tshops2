@extends('admin.layouts.index')

@section('content')

    <div class="wrapper__side-bar">



            <div class="purchase__side-bar col-md-4">
                @foreach ($anons->orders as $item)
                <div class="purchase__side-item">
                        <a href="{{route('org-purchase.show-order', [$item, 'anons'=>$anons])}}">{{$item->user->name}}</a>
                </div>

                @endforeach
            </div>



            <div class="purchase__content col-md-8">
                @yield('right-bar')
            </div>

    </div>

@stop


@section('css')
    <style>
        .wrapper__side-bar {
            display: flex;
        }
        .purchase__side-bar {
            display: flex;
            flex-direction: column;
            margin: -30px 1px 1px -14px;
            border-right: 1px solid #ccc;
            background-color: yellow;
            height: 100vh;
        }
        .purchase__side-item {
            border: 1px solid #ccc;
            padding: 10px 0 10px 10px;
        }


        .purchase__content {
            flex:1;
            margin: -30px 0 0 0;
            background-color: #ccc;

        }
        .order__wrapper {
            width: 100%;
            min-height: 100%;
        }
    </style>
@stop




{{--<div class="row">--}}
{{--    <div class="col-3">--}}
{{--        <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">--}}
{{--            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#{{$item->id}}" role="tab" aria-controls="v-pills-home" aria-selected="true">--}}
{{--                заказ №{{$item->id}} Клиент {{$item->user->name}}</a>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-9">--}}
{{--        <div class="tab-content" id="v-pills-tabContent">--}}
{{--            <div class="tab-pane fade show active" id="#{{$item->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">--}}
{{--                {{$item->user->name}}--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
