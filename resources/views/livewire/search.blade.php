<div>

    <input wire:model="search" type="text" name="search" id="search"  list="mylist" placeholder="Search here...">
    @if (!empty($query))
        <datalist id="mylist">
            @foreach ($dataList as $item)
                <option value="{{ $item->title }}"> {{ $item->category->title }}</option>
            @endforeach
        </datalist>

    @endif
</div>
