@extends('admin.layouts.index')


@section('content')
{{--    {{$anonses}}--}}
    <div class="container">
        <a href="{{route('anons.create')}}" class="btn btn-primary mb-2">Создать анонс</a>
        <table class="table">

            <thead>
                <tr>

                    <th>Бренд</th>
                    <th>Организатор</th>
                    <th>Дата выкупа</th>
                    <th>Корзина</th>
                    <th>Стать участником</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            @foreach($anonses as $anons)
                <tr class="border-bottom">

                    <td>
                        <a href="{{route('anons.show', $anons)}}">
                            <img src=" {{$anons->brand->img}}" alt=" {{$anons->brand->name}}">
                        </a>

                    </td>
                    <td>{{$anons->user_id}}</td>
                    <td>{{$anons->date_purchase}}</td>
                    <td>
                        <div>
                            <span>Необходимо собрать</span>
                            <span>{{$anons->need_cart}}</span>
                        </div>
                        <div>
                            <span>Уже собранно</span>
                            <span class="ml-5">{{$anons->need_cart}}</span>
                        </div>

                    </td>
                    <td><a href="{{route('anons.show', $anons)}}" class="btn btn-primary">Стать участником</a></td>


                    <td class="d-flex justify-content-lg-end">

                        <a href="/organizer/anons/{{$anons->id}}/edit" class="btn btn-success"> <i class="fa fa-edit"></i></a>

                        <form action="{{route('anons.destroy', $anons)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
