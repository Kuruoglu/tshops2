@extends('layouts.app')


@section('content')
    <div class="jumbotron small-box">
                {{$anons}}
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
                <div class="mr-5">Всего собранно
                    <span>
                        {{$anons->orders->sum('price')}}
                    </span>
                </div>
                <div class="mr-5" >Количество участников <span>{{$anons->users->count()}}</span></div>
            </div>
        </div>
        <hr>
        <div class="d-flex">
            <div class="border-left">
                <p>Посчитать стоимость товара</p>
                <label for="price">Цена на сайте</label>
                <input type="text" name="price" id="price">
                <label for="total">Итого</label>
                <input type="text" name="total" id="total" value="">
            </div>
            <div>
                <form action="/home/anons/user/add" method="post">

                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="anons_id" value="{{$anons->id}}">
                    @if (!$anons->users->contains(Auth::user()->id))
                        <button type="submit" class="btn btn-primary">Стать участником</button>
                    @else
                        <button type="submit" class="btn btn-primary">Отменить Участие</button>
                    @endif

                </form>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Добавить Заказ
                </button>
            </div>
        </div>
        <hr>


    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавление заказа</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    @include('org.anons.modal')
                </div>
                <div class="modal-footer d-flex justify-content-between">

                </div>
            </div>
        </div>
    </div>
@stop
