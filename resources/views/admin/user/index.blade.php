@extends('admin.layouts.index')

@section('content')
    @extends('admin.layouts.index')


@section('content')
    <div class="container">
        <a  href="{{route('user.create')}}" class="btn btn-dark mb-3">Создать пользователя</a>
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Имя</th>
                <th>Роль пользователя</th>
                <th>Телефон</th>
                <th>Компания пользователя</th>
                <th>Кол-во заказов</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users  as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->company ?? ''}}</td>
                    <td>{{$user->qtyOrder}}</td>
                    <td class="d-flex justify-content-lg-end">
                        <a href="{{route('user.edit', ['user' => $user->id])}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                        <form action="{{ route('user.destroy', $user) }}" method="post">
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

@stop
