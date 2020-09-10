@extends('layouts.profile')

@section('sidebar')
    @parent
        <div class="container py-4 " id="content">
            {{$user}}
            <form action="{{route('update.profile', $user->id)}}"   method="post">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="col-md-6">
                        <input type="text" class="form-control " placeholder="Имя" name="name" value="{{old('name', $user->name ?? '')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Фамилия" name="last_name" value="{{old('last_name', $user->last_name ?? '')}}">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <input type="text" class="form-control " placeholder="Email" name="email" value="{{old('email', $user->email ?? '')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Номер телефона +38 (0**) *******" name="phone" value="{{old('phone', $user->phone ?? '')}}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputCity">Город</label>
                        <input type="text" class="form-control" name="city" id="inputCity" value="{{old('city', $user->city ?? '')}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputStreet">Улица</label>
                        <input type="text" class="form-control" name="street" id="inputStreet" value="{{old('street', $user->street ?? '')}}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputBild">№ дома</label>
                        <input type="text" name="bild_number" class="form-control" id="inputBild" value="{{old('bild_number', $user->bild_number ?? '')}}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputFlat">№ Квартиры</label>
                        <input type="text" name="flat" class="form-control" id="inputFlat" value="{{old('flat', $user->flat ?? '')}}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Индекс</label>
                        <input type="text" name="zip" class="form-control" id="inputZip" value="{{old('zip', $user->zip ?? '')}}">
                    </div>
                    <div class="form-group">
                        <label for="formControlFile1">Выберете себе фото</label>
                        <input type="file" class="form-control-file" id="formControlFile1" name="img">
                        <div>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
                <hr class="mb-5">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPost">Почтовая служба</label>
                        <input type="text" class="form-control" name="post_office" id="inputPost" value="{{old('post_office', $user->post_office ?? '')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPostNum">Номер отделения</label>
                        <input type="text" class="form-control" name="post_office_number" id="inputPostNum" value="{{old('post_office_number', $user->post_office_number ?? '')}}">
                    </div>

                </div>
                <button class="btn btn-primary" type="submit">Сохранить</button>

            </form>
        </div>
@stop
