@extends('admin.layouts.index')

@section('content')
    <div class="jumbotron small-box">
        <div class="image">

        </div>
        <div>
            <div class="d-flex justify-content-between mb-5">
                <div>Комиссия организатора <span>{{$anons->service_tax}} %</span></div>
                <div>Скидка на сайте <span>{{$anons->price_off}} %</span></div>
                <div>Дополнительная скидка <span>{{$anons->additional_off}} %</span></div>
                <div>Дата выкупа <span>{{$anons->date_purchase}}</span></div>
            </div>
            <div class="d-flex mb-5">
                <div class="mr-5">Необходимо для выкупа <span>{{$anons->need_cart}}</span></div>
                <div class="mr-5">Всего собранно <span>200</span></div>
                <div class="mr-5" >Количество участников <span>15</span></div>
            </div>
        </div>
        <hr>
        <div class="d-flex">
            <div class="border-left">
                <p>Посчитать стоимость товара</p>
                <label for="price">Цена на сайте</label>
                <input type="text" name="price" id="price">
                <label for="total">Итого</label>
                <input type="text" name="total" id="total">
            </div>
            <div>
                <a href="" class="btn btn-primary">Учавствовать</a>
            </div>
        </div>
        <hr>


    </div>
@stop
