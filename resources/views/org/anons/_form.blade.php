<input type="hidden" value="{{Auth::user()->id}}" name="user_id">
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"></span>
    </div>

    <input type="text" class="form-control   @error('title') is-invalid @enderror" placeholder="Название"
           name="title" aria-label="Ссылка магазина" aria-describedby="basic-addon1"
           value="{{ old('title', $anons['title'] ?? '')}}"
    >
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"></span>
    </div>
    <textarea name="short_desc" class="form-control  @error('short_desc') is-invalid @enderror" placeholder="Краткое описание">{{old('short_desc', $anons['short_desc'] ?? '') }}</textarea>
    @error('short_desc')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror

</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">@</span>
    </div>

    <input type="text" class="form-control @error('url') is-invalid @enderror" placeholder="Ссылка магазина"
           name="url" aria-label="Ссылка магазина" aria-describedby="basic-addon1"
           value="{{ old('url', $anons['url'] ?? '')}}"
    >
    @error('url')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3 row-cols-12">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Категория</label>
    </div>
    <select class="custom-select @error('category_id') is-invalid @enderror" id="inputGroupSelect01" name="category_id">
        @if (!isset($anons))
            <option value="" selected>Выберите категорию...</option>


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
    @error('category_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Бренд</label>
    </div>
    <select class="custom-select @error('brand_id') is-invalid @enderror" id="inputGroupSelect01" name="brand_id">
        @if (!isset($anons))

        <option  value="" selected>Выберите бренд...</option>
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
    @error('brand_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="input-group mb-3 row">

{{--    <div class="input-group-prepend">--}}
{{--        <span class="input-group-text">Скидка </span>--}}
{{--        <input type="text" class="form-control" name="price_off" value="{{ old('price_off', $anons['price_off'] ?? '')}}">--}}
{{--    </div>--}}
    <div class="input-group-prepend col-md-4">
        <span class="input-group-text">Услуги организатора %</span>
        <input type="text" class="form-control @error('service_tax') is-invalid @enderror" placeholder="@error('service_tax') {{$message}} @enderror" name="service_tax" value="{{ old('service_tax', $anons['service_tax'] ?? '')}}">
{{--        @error('service_tax')--}}
{{--        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--        @enderror--}}
    </div>
    <div class="input-group-prepend col-md-4">
        <span class="input-group-text">Доп.Скидка </span>
        <input type="text" class="form-control @error('additional_off') is-invalid @enderror" placeholder="@error('additional_off') {{$message}} @enderror" name="additional_off" value="{{ old('additional_off', $anons['additional_off'] ?? '')}}">
{{--        @error('additional_off')--}}
{{--        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--        @enderror--}}
    </div>
    <div class="input-group-prepend col-md-4">
            <span class="input-group-text">Необходимая сумма</span>
        <input type="text" class="form-control @error('need_cart') is-invalid @enderror" placeholder="@error('need_cart') {{$message}} @enderror" name="need_cart" value="{{ old('need_cart', $anons['need_cart'] ?? '')}}">
{{--        @error('need_cart')--}}
{{--        <div class="invalid-feedback">{{ $message }}</div>--}}
{{--        @enderror--}}
    </div>

</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Картинка</span>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input  @error('img') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        @error('img')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group-prepend ">
        <div class="input-group-prepend ml-3">
            <span class="input-group-text">Время выкупа</span>
        </div>
        <div>

        </div>
        <input type="datetime-local" class="form-control @error('date_purchase') is-invalid @enderror" name="date_purchase" value="{{ old('date_purchase', $anons['date_purchase'] ?? '')}}">
        @error('date_purchase')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
