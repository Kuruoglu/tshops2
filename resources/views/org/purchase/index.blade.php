@extends('admin.layouts.index')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Из анонса</th>
                <th>Бренд</th>
                <th>Дата выкупа</th>
                <th>Дата доставки</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($purchases as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->anons_id}}</td>
                <td>{{$item->brand_id}}</td>
                <td>{{$item->date_purchase}}</td>
                <td>{{$item->date_delivery}}</td>
                <td></td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@stop
