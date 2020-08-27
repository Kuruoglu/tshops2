<div class="form-group">
    <input type="text" name="name" value="{{ old('name', $category->name ?? '')  }}" class="form-control" placeholder="Наименование категории">
</div>
<div class="form-group">
    <input type="text" name="slug" value="{{ old('name', $category->slug ?? '')  }}" class="form-control" placeholder="Как будет выглядеть в ссылке">
</div>

<div class="form-group">
    <select name="parent_id"  class="form-control">
        <option value="0">-- Без родительской категории</option>
        @include('admin.category._categories')
    </select>
</div>

<hr>

<button type="submit" class="btn btn-primary">Сохранить</button>


