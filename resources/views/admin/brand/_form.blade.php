<div class="form-group">
    <input type="file" name="img"  class="form-control" >
</div>

<div class="form-group">
    <input type="text" name="name" value="{{ old('name', $brand->name ?? '')  }}" class="form-control" placeholder="Наименование категории">
</div>
<div class="form-group">
    <input type="text" name="slug" value="{{ old('name', $brand->slug ?? '')  }}" class="form-control" placeholder="Как будет выглядеть в ссылке">
</div>


<button type="submit" class="btn btn-primary">Сохранить</button>


