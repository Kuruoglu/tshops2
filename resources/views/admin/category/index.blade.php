@extends('admin.layouts.index')


@section('content')
    <div class="container">
        <a href="{{route('category.create')}}" class="btn btn-dark">Создать категорию</a>
        <table class="table">
            <caption>Категории</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Слаг</th>
                <th>кол-во товаров</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
          @foreach($categories as $category)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$category->name ?? 'Наименование отсутсвует'}}</td>
                  <td>{{$category->slug}}</td>
                  <td>{{$category->qty}}</td>
                  <td class="d-flex justify-content-lg-end">
                      <a href="{{route('category.edit', ['category' => $item->id])}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                      <form action="/admin/category/{{$item->id}}" method="post">
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
