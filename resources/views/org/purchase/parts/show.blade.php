@extends('org.purchase.create')

@section('right-bar')

    <h2>Заказ № {{$order->id}}</h2>
    <hr>
    <p>Заказчик: {{$order->user->name}}</p>
    <p>Заказал: {{$order->url}}</p>
    <p>Цвет : {{$order->color}}</p>
    <p>Размер : {{$order->size}}</p>
    <p>Количество: {{$order->qty}}</p>
    <p>Цена : {{$order->price}} {{$order->currency}}</p>
    <p>Сумма всего: {{$order->qty * $order->price}} {{$order->currency}}</p>
    <p>Комментарий : {{$order->comment}}</p>
    <div class="row">
        <div class="col-md-3">
            <p>Изменить статус заказа</p>
        </div>
        <div class="col-md-2">
            <select name="status" id="status" class="form-control">
                <option value="1">Заказан</option>
            </select>

        </div>
    </div>




{{--    {{$order[0]->id}}--}}
@stop
