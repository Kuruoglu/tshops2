@extends('admin.layouts.index')


@section('content')
    <div class="container">
        <a href="{{route('brand.create')}}" class="btn btn-dark mb-2">Добавить бренд</a>
        <table class="table">

            <thead>
            <tr>
                <th>#</th>
                <th>Картинка</th>
                <th>Название</th>
                <th>Слаг</th>

                <th></th>
            </tr>
            </thead>
            <tbody>
          @foreach($brands as $brand)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td class="" >
                      <img style="width: 50px; " src="{{$brand->img}}" alt="{{$brand->name}}">
                  </td>
                  <td>{{$brand->name ?? 'Наименование отсутсвует'}}</td>
                  <td>{{$brand->slug}}</td>
                  <td class="d-flex justify-content-lg-end">
                      <a href="{{route('brand.edit', $brand)}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                      <form action="{{ route('brand.destroy', $brand) }}" method="post">
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
