@if (auth()->check())
    <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">
@endif
<input type="hidden" name="slug" value="">
<div class="form-group row ">
    <label for="name" class="col-md-2 col-form-label">Название продукта</label>
    <div class="col-md-10">
        <input type="text" class="form-control
            @error('name') is-invalid @enderror" id="name" name="name"
            value="{{old('name', $product->name ?? '')}}"
        >

            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<div class="form-group row ">
    <label for="short_desc" class="col-md-2 col-form-label">Краткое описание</label>
    <div class="col-md-10">
        <textarea name="short_desc" id="short_desc" class="form-control @error('short_desc') is-invalid @enderror">
            {{old('short_desc', $product->short_desc ?? '')}}
        </textarea>

            @error('short_desc')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<div class="form-group row ">
    <label for="full_desc" class="col-md-2 col-form-label">Полное описание</label>
    <div class="col-md-10">
        <textarea name="full_desc" id="full_desc" class="form-control
             @error('full_desc') is-invalid @enderror">
             {{old('name', $product->full_desc ?? '')}}
        </textarea>

            @error('full_desc')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Категория</label>
    <div class="col-md-10">
        <select name="category_id"  class="form-control">
            <option value="0">-- Без родительской категории</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Бренд</label>
    <div class="col-md-10">
        <select name="brand_id"  class="form-control">
            <option value="0">-- Без бренда</option>
            @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row ">
    <label for="allow_reviews" class="col-md-2 col-form-label">Публиковать товар?</label>
    <div class="col-md-2">
        <input type="checkbox"  name="allow_reviews" value="1" checked>
    </div>
</div>
<div class="form-group row ">
    <label for="price" class="col-md-2 col-form-label">Цена</label>
    <div class="col-md-10">
        <input type="text" class="form-control
            @error('price') is-invalid @enderror" name="price" id="price"
            value="{{old('name', $product->price ?? '')}}"
        >
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<div class="form-group row ">
    <label for="price" class="col-md-2 col-form-label">Цвет</label>
    <div class="col-md-10">
        <input type="text" class="form-control
            @error('color') is-invalid @enderror" name="color" id="color"
            value="{{old('name', $product->color ?? '')}}"
        >

            @error('color')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<div class="form-group row ">
    <label for="qty" class="col-md-2 col-form-label">Кличество</label>
    <div class="col-md-10">
        <input type="text" class="form-control
            @error('qty') is-invalid @enderror" name="qty" id="qty"
            value="{{old('name', $product->qty ?? '')}}"
        >

            @error('qty')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<hr>
<div class="form-group row ">
    <label for="img" class="col-md-2 col-form-label">Картинка</label>
    <div class="col-md-10">
        <input type="file" class="form-control
            @error('img') is-invalid @enderror" name="img" id="img">

            @error('img')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
