@extends('layouts.app')

@section('content')
    <div class="container">

        @include('home.partials._anons')
        @include('home.partials._brands')
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Инфо</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <p>Ваших учетных данных не достаточно для совершения заказов.</p>
                    <p>Пожалуйста заполните ваш профиль!</p>
                    <a href="{{'/home/user/profile'}}" class="btn btn-primary">В личный кабинет</a>
{{--                    @include('home.anons.modal')--}}
                </div>
                <div class="modal-footer d-flex justify-content-between">

                </div>
            </div>
        </div>
    </div>
@stop

