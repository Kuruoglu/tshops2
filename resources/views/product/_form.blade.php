@if (auth()->check())
    <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">
@endif
<input type="hidden" name="slug" value="">
<div class="form-group row ">
    <label for="name" class="col-md-2 col-form-label">Название продукта</label>
    <div class="col-md-10">
        <input type="text" class="form-control" id="name" name="name">
    </div>
</div>
<div class="form-group row ">
    <label for="short_desc" class="col-md-2 col-form-label">Краткое описание</label>
    <div class="col-md-10">
        <textarea name="short_desc" id="short_desc" class="form-control"></textarea>
    </div>
</div>
<div class="form-group row ">
    <label for="full_desc" class="col-md-2 col-form-label">Полное описание</label>
    <div class="col-md-10">
        <textarea name="full_desc" id="full_desc" class="form-control"></textarea>
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
    <label class="col-md-2 col-form-label">Категория</label>
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
        <input type="text" class="form-control" name="price" id="price">
    </div>
</div>
<div class="form-group row ">
    <label for="qty" class="col-md-2 col-form-label">Кличество</label>
    <div class="col-md-10">
        <input type="text" class="form-control" name="qty" id="qty">
    </div>
</div>
<hr>
<div class="form-group row ">
    <label for="img" class="col-md-2 col-form-label">Картинка</label>
    <div class="col-md-10">
        <input type="file" class="form-control" name="img" id="img">
    </div>
</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
