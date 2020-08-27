@foreach($categories as $categoryItem)
    <option value="{{$categoryItem->id ?? ''}}"
            @isset($category->id)

            @if ($category->parent_id == $categoryItem->id)
            selected = ''
            @endif

            @if ($category->id == $categoryItem->id)
            disabled = ''
        @endif

        @endisset
    >
        {{$delimetr ?? ''}}{{$categoryItem->name ?? ''}}
    </option>
    @isset($categoryItem->children)
        @include('admin.category._categories', [
            'categories' => $categoryItem->children,
            'delimetr' => ' - ' . $delimetr,
        ])
    @endisset
@endforeach
