<form action="{{route('order.store')}}" method="post">
    @csrf
    <input type="hidden" name="anons_id" value="{{$anons->id}}">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <input type="hidden" name="status_id" value="1">
    <input type="hidden" name="currency" value="usd">
    <div class="form-group">
        <label for="recipient-url" class="col-form-label">Ссылка:*</label>
        <input type="text" class="form-control
            @error('url') is-invalid @enderror" id="recipient-url" name="url"
               placeholder="@error('url') {{$message}}@enderror"
        >
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="recipient-qty" class="col-form-label">Количество:*</label>
            <input type="text" class="form-control
                @error('qty') is-invalid @enderror" id="recipient-qty" name="qty"
                   placeholder="@error('qty') {{$message}}@enderror"
            >
        </div>
        <div class="col-md-6">
            <label for="recipient-price" class="col-form-label">Цена на сайте:*</label>
            <input type="text" class="form-control
                @error('price') is-invalid @enderror" id="recipient-price"
                   name="price" placeholder="@error('price') {{$message}}@enderror"
            >
            <small>* С учетом скидки</small>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="recipient-size" class="col-form-label">Размер:*</label>
            <input type="text" class="form-control
                @error('size') is-invalid @enderror" id="recipient-size" name="size"
                   placeholder="@error('size') {{$message}}@enderror"
            >
        </div>
        <div class="col-md-6">
            <label for="recipient-color" class="col-form-label">Цвет:*</label>
            <input type="text" class="form-control
                @error('color') is-invalid @enderror" id="recipient-color" name="color"
                   placeholder="@error('color') {{$message}}@enderror"
            >
        </div>
    </div>
    <div class=" d-flex justify-content-between">

        <button  type="submit" class="btn btn-primary">Сохранить</button>



    </div>

</form>
