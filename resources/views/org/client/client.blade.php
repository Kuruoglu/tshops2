@extends('admin.layouts.index')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Номер клиента</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->email}}</td>
            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
