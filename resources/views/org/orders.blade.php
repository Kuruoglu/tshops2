@extends('admin.layouts.index')


@section('content')
{{--{{$orders}}--}}
    <div class="container">
        <a href="{{route('order.create')}}" class="btn btn-dark">Создать заказ</a>
        <table class="table">
            <caption>Категории</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Ссылка</th>
                <th>Количество</th>
                <th>Цвет</th>
                <th>Размер</th>
                <th>Цена</th>
                <th>Почтовая служба</th>
                <th>Почтовое отделение</th>
                <th>Статус</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$order->url ?? 'Наименование отсутсвует'}}</td>
                    <td>{{$order->qty}}</td>
                    <td>
                        <div style = "width: 25px; height: 25px; background-color: {{$order->color}}" ></div>
                    </td>
                    <td>{{$order->size}}</td>
                    <td>{{$order->price}} {{$order->currency}}</td>
                    <td>{{$order->post_office}}</td>
                    <td>{{$order->post_office_number}}</td>
                    <td>
                        <form action="/organizer/order/{{$order->id}}" class="status" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$order->id}}">
                            <select name="status_id" >
                                @foreach($statuses as $status)

                                    <option value="{{$status->id}}"
                                        @if ($status->id == $order->status_id)
                                            selected
                                        @endif
                                    >
                                        {{$status->name}}
                                    </option>
                                @endforeach

                            </select>
                        </form>

                    </td>
                    <td class="d-flex justify-content-lg-end">
                        <a href="#" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                        <form action="#" method="post">
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

@section('js')
    <script>
      document.querySelector('.status').addEventListener('change', (event) => {
          event.preventDefault()
          console.log('cange')
          document.querySelector('.status').submit()
        })
    </script>
@stop
