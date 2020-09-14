<form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="anons_id" value="{{$anons->id}}">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <input type="hidden" name="status_id" value="1">
    <input type="hidden" name="currency" value="usd">
    <div class="form-group">
        <label for="recipient-url" class="col-form-label">Ссылка:*</label>
        <input type="text" class="form-control" id="recipient-url" name="url">
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="recipient-qty" class="col-form-label">Количество:*</label>
            <input type="text" class="form-control" id="recipient-qty" name="qty">
        </div>
        <div class="col-md-6">
            <label for="recipient-price" class="col-form-label">Цена на сайте:*</label>
            <input type="text" class="form-control" id="recipient-price" name="price">
            <small>* С учетом скидки</small>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="recipient-size" class="col-form-label">Размер:*</label>
            <input type="text" class="form-control" id="recipient-size" name="size">
        </div>
        <div class="col-md-6">
            <label for="recipient-color" class="col-form-label">Цвет:*</label>
            <input type="text" class="form-control" id="recipient-color" name="color">
        </div>
    </div>
    <div class=" d-flex justify-content-between">
        <button  type="submit" class="btn btn-primary">Сохранить</button>


    </div>

</form>
