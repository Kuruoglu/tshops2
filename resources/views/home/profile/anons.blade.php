@extends('layouts.profile')

@section('sidebar')
    @parent
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Бренд</th>
                <th>Имя организатора</th>

                <th>Дата выкупа</th>
                <th>Корзина</th>
                <th></th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach($user->anonses as $anons)
                <tr class="border-bottom">
                    <td>
                        <a href="{{route('anons.show', $anons)}}">
                            <img src=" {{$anons->brand->img}}" alt=" {{$anons->brand->name}}" style="width: 50px">
                        </a>
                        {{--                        {{$anons}}--}}

                    </td>
                    <td>{{$anons->user->name}}</td>
                    <td>{{$anons->date_purchase}}</td>
                    <td>
                        <div>
                            <span>Необходимо собрать</span>
                            <span>{{$anons->need_cart}}</span>
                        </div>
                        <div>
                            <span>Уже собранно</span>
                            <span class="ml-5"> {{$anons->orders->sum('price')}}</span>
                        </div>
                        <div>
                            <span>Участников</span>
                            <span class="ml-5"> {{$anons->users->count()}}</span>
                        </div>

                    </td>



                    <td class="d-flex justify-content-lg-end">



                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
