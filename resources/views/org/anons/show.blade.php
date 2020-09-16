@extends('admin.layouts.index')

@section('content')
{{--    {{$anons}}--}}
@include('_messages')
    <div class="jumbotron small-box">
        <div class="image">

        </div>
        <div class="d-flex ">
            <div class="mr-5">
                <img src="{{$anons->brand->img}}" alt="{{$anons->brand->name}}" style="width: 150px">
            </div>
            <div class=" mb-5">
                <div>Комиссия организатора <span>{{$anons->service_tax}} %</span></div>
                <div>Дополнительная скидка <span>{{$anons->additional_off}} %</span></div>
                <div>Дата выкупа <span>{{$anons->date_purchase}}</span></div>
            </div>
        </div>
            <div class="d-flex mb-5">
                <div class="mr-5">Необходимо для выкупа <span>{{$anons->need_cart}}</span></div>
                <div class="mr-5">Всего собранно
                    <span>
                        {{$anons->orders->sum('price')}}
                    </span>
                </div>
                <div class="mr-5" >Количество участников <span>{{$anons->users->count()}}</span></div>
                <div class="mr-5" >Количество Заказов <span>{{$anons->orders->count()}}</span></div>
            </div>
        <hr>
        <div class="d-flex">


                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Добавить Заказ
                </button>
            </div>
        </div>
        <hr>
        <div>
            <span>Участники:</span>
            <table class="table">

                <tbody>

                @foreach($anons->users as $user)
                <tr>
                    <td style="width: 50px">{{$loop->iteration}}</td>
                    <td style="width: 50px">{{$user->img}}</td>
                    <td>
                        <a data-toggle="collapse" href="#collapseExample{{$user->id}}" aria-expanded="false" aria-controls="collapseExample">{{$user->name}}</a>
                        <div class="collapse" id="collapseExample{{$user->id}}">
                            <div class="card card-block">
                               <table>
                                   <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Ссылка</th>
                                       <th>Название</th>
                                       <th>Количество</th>
                                       <th>Цена</th>
                                       <th>Размер</th>
                                       <th>Цвет</th>
                                       <th></th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($orders as $order)
                                   <tr>
                                           <td>{{$loop->iteration}}</td>
                                           <td>{{$order->url}}</td>
                                           <td></td>
                                           <td>{{$order->qty}}</td>
                                           <td>{{$order->price}}</td>
                                           <td>{{$order->size}}</td>
                                           <td>{{$order->color}}</td>
                                           <td></td>

                                   </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form action="/home/anons/user/add" method="post">

                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <input type="hidden" name="anons_id" value="{{$anons->id}}">
                            <button  type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>

                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
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
                   @include('org.anons.modal')
                </div>
                <div class="modal-footer d-flex justify-content-between">

                </div>
            </div>
        </div>
    </div>
@stop
