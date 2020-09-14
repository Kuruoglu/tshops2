@extends('layouts.profile')

@section('sidebar')
    @parent
    <div class="container">
{{--        {{$orders}}--}}
        <div class="row mt-2" >
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Организатор</th>
                        <th>Ссылка</th>
                        <th>Количество</th>
                        <th>Статус</th>
                        <th>Цена</th>
                        <th>К оплате</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <a href="">{{$order->anons->user->name}}</a>
                        </td>
                        <td>
                            <a href="">{{$order->url}}</a>
                        </td>
                        <td>{{$order->qty}}</td>
                        <td>{{$order->status->name}}</td>
                        <td>{{$order->price}} {{$order->currency}}</td>
                        <td>{{$order->price * $order->qty}} {{$order->currency}}</td>
                        <td>
                            <form action="{{route('order.destroy', $order->id)}}">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <tr>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
