
<form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="anons_id" value="{{$anons->id}}">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <input type="hidden" name="status_id" value="1">
    <input type="hidden" name="currency" value="usd">
    <input type="hidden" name="post_office" value="{{Auth::user()->post_office}}">
    <input type="hidden" name="post_office_number" value="{{Auth::user()->post_office_number}}">
    <input type="hidden" name="phone" value="{{Auth::user()->phone}}">
    <div class="form-group">
        <label for="recipient-url" class="col-form-label">Ссылка:*</label>
        <input type="text" class="form-control
            @error('url') is-invalid @enderror" value="{{old('url', $order->url ?? '')}}" id="recipient-url" name="url"
            placeholder="@error('url') {{$message}}@enderror"
        >
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="recipient-qty" class="col-form-label">Количество:*</label>
            <input type="text" class="form-control
                @error('qty') is-invalid @enderror" value="{{old('qty', $order->qty ?? '')}}" id="recipient-qty" name="qty"
                placeholder="@error('qty') {{$message}}@enderror"
            >
        </div>
        <div class="col-md-6">
            <label for="recipient-price" class="col-form-label">Цена на сайте:*</label>
            <input type="text" class="form-control
                @error('price') is-invalid @enderror" value="{{old('price', $order->price ?? '')}}" id="recipient-price"
                name="price" placeholder="@error('price') {{$message}}@enderror"
            >
            <small>* С учетом скидки</small>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="recipient-size" class="col-form-label">Размер:*</label>
            <input type="text" class="form-control
                @error('size') is-invalid @enderror" value="{{old('size', $order->size ?? '')}}" id="recipient-size" name="size"
                placeholder="@error('size') {{$message}}@enderror"
            >
        </div>
        <div class="col-md-6">
            <label for="recipient-color" class="col-form-label">Цвет:*</label>
            <input type="text" class="form-control
                @error('color') is-invalid @enderror" value="{{old('color', $order->color ?? '')}}" id="recipient-color" name="color"
                placeholder="@error('color') {{$message}}@enderror"
            >
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="comment" class="col-form-label">Комментарий:*</label>
            <textarea name="comment" id="comment" class="form-control
                @error('comment') is-invalid @enderror"  placeholder="@error('comment') {{$message}}@enderror">{{old('comment', $order->comment ?? '')}}</textarea>

        </div>

    </div>
    <div class=" d-flex justify-content-between">

        <button  type="submit" class="btn btn-primary">Сохранить</button>



    </div>

</form>
