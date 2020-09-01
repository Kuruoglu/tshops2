<input type="hidden" value="{{Auth::user()->id}}" name="user_id">

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">@</span>
    </div>

    <input type="text" class="form-control" placeholder="Ссылка магазина"
           name="url" aria-label="Ссылка магазина" aria-describedby="basic-addon1"
           value="{{ old('url', $anons['url'] ?? '')}}"
    >
</div>
<div class="input-group mb-3 row-cols-12">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Категория</label>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="category_id">
        @if (!isset($anons))
            <option value="null" selected>Выберите категорию...</option>


            @foreach($categories as $category)
                <option value="{{$category->id}}" >{{$category->name}}</option>
            @endforeach
        @else

            @foreach($categories as $category)
                <option value="{{$category->id}}" @if ($category->id == $anons->category_id)
                    selected
                @endif>{{$category->name}}</option>
            @endforeach
        @endif


    </select>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Бренд</label>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="brand_id">
        @if (!isset($anons))

        <option  value="null" selected>Выберите бренд...</option>
        @foreach($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
        @endforeach
        @else
            @foreach($brands as $brand)
                <option value="{{$brand->id}}" @if ($brand->id == $anons->brand_id)
                selected
                    @endif>{{$brand->name}}</option>
            @endforeach
        @endif
    </select>
    <div class="input-group-prepend">
        <span class="input-group-text">Услуги организатора %</span>
        <input type="text" class="form-control" name="service_tax">
    </div>
</div>


<div class="input-group mb-3 row-cols-12">

    <div class="input-group-prepend">
        <span class="input-group-text">Скидка </span>
        <input type="text" class="form-control" name="price_off" value="{{ old('price_off', $anons['price_off'] ?? '')}}">
    </div>
    <div class="input-group-prepend">
        <span class="input-group-text">Доп.Скидка </span>
        <input type="text" class="form-control" name="additional_off" value="{{ old('additional_off', $anons['additional_off'] ?? '')}}">
    </div>
    <div class="input-group-prepend ">
        <div class="input-group-prepend ml-3">
            <span class="input-group-text">Необходимая сумма для выкупа</span>
        </div>
        <input type="text" class="form-control" name="need_cart" value="{{ old('need_cart', $anons['need_cart'] ?? '')}}">

    </div>

</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Картинка</span>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>
    <div class="input-group-prepend ">
        <div class="input-group-prepend ml-3">
            <span class="input-group-text">Время выкупа</span>
        </div>
        <input type="datetime-local" class="form-control" name="date_purchase" value="{{ old('date_purchase', $anons['date_purchase'] ?? '')}}">

    </div>
</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
