@extends('admin.layouts.index')


@section('content')
    <div class="container">
        <a href="{{route('anons.create')}}" class="btn btn-primary mb-2">Создать анонс</a>
        <table class="table">

            <thead>
                <tr>

                    <th>Бренд</th>

                    <th>Дата выкупа</th>
                    <th>Корзина</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            @foreach($anonses as $anons)
                <tr class="border-bottom">
                    <td>
                        <a href="{{route('anons.show', $anons)}}">
                            <img src=" {{$anons->brand->img}}" alt=" {{$anons->brand->name}}" style="width: 50px">
                        </a>
{{--                        {{$anons}}--}}

                    </td>
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
                    <td><a href="{{route('org-purchase.add', ['anons' => $anons])}}" class="btn btn-primary">Сформировать выкуп</a></td>


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
