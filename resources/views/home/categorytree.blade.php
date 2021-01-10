<ul class="submenu dropdown-menu">
    @foreach ($children as $subcategory)
        @if (count($subcategory->children))
            <li>
                <a class="dropdown-item" href="{{route('admin_home')}}">
                    @include('home.categorytree',['children'=>$subcategory->children])
                </a>
            </li>
        @else
            <li>
                <a class="dropdown-item" href="{{route('cars',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}"> {{ $subcategory->title }} </a>
            </li>
        @endif
    @endforeach
</ul>
