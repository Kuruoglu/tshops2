<div class="form-group">
    <input type="text" name="name" value="{{ $category->name ?? '' }}" class="form-control" placeholder="Наименование категории">
</div>

<div class="form-group">
    <select name="parent_id"  class="form-control">
        <option value="0">-- Без родительской категории</option>
        @include('admin.category._categories')
    </select>
</div>
<input type="hidden" name="slug">
<hr>

<button type="submit" class="btn btn-primary">Сохранить</button>


