    <div class="card-group row">
@foreach ($brands as $brand)
        <div class="card" style="width: 18rem;">
            <a href="{{route('brand.show', $brand)}}"><img src="{{$brand->img}}" class="card-img-top p-3" alt="{{$brand->name}}"></a>

        </div>
@endforeach
    </div>
