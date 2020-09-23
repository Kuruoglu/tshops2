@extends('layouts.app')


@section('content')
    <div class="container mt-5">

    @include('_messages')
    <div class="jumbotron small-box m-auto" style="width: 700px">
        <div class="mb-3">
            <h4>{{$anons->title}}</h4>
            <span>Организатор: {{$anons->user->name}}</span>
        </div>
        <div class="d-flex ">
            <div class="image mr-5 border">
                <img src="{{$anons->brand->img}}" alt="{{$anons->brand->name}}" style="width: 100px">
            </div>
            <div class="justify-content-between mb-5">
                <div>Комиссия организатора <span>{{$anons->service_tax}} %</span></div>
                <div>Дополнительная скидка <span>{{$anons->additional_off}} %</span></div>
                <div>Дата выкупа <span>{{$anons->date_purchase}}</span></div>
            </div>
        </div>
            <div class="d-flex mb-5 mt-4">
                <div class="mr-5">Необходимо для выкупа <span>{{$anons->need_cart}}</span></div>
                <div class="mr-5">Всего собранно
                    <span>
                        {{$anons->orders->sum('price')}}
                    </span>
                </div>
                <div class="mr-5" >Количество участников <span>{{$anons->users->count()}}</span></div>
            </div>
        <hr>
        <div class="d-flex">

            <div class="d-flex ">
                <div>
                    <form action="/home/anons/user/add" method="post">

                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="anons_id" value="{{$anons->id}}">
                        @if (!$anons->users->contains(Auth::user()->id))

                            <button type="submit" class="btn btn-primary mr-5">Стать участником</button>
                        @else
{{--                            <button type="button" class="btn btn-danger mr-5" data-toggle="modal" data-target="#exampleModal2">--}}
{{--                                Отменить Участие--}}
{{--                            </button>--}}
                            <button type="submit" class="btn btn-danger mr-5">Отменить Участие</button>
                        @endif


                    </form>

                </div>
                <div>
                    @if ($anons->users->contains(Auth::user()->id))
                        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#exampleModal">
                            Добавить Заказ
                        </button>
                    @endif
                    @if ($anons->orders->contains('user_id', Auth::user()->id))
                        <a href="{{route('profile.orders')}}" class="btn btn-success ">Мои заказы</a>
                    @endif

                </div>
            </div>
        </div>



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
                        @include('home.anons.modal')
                    </div>
                    <div class="modal-footer d-flex justify-content-between">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Внимание</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        @include('home.anons.modal2')
                    </div>
                    <div class="modal-footer d-flex justify-content-between">

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
