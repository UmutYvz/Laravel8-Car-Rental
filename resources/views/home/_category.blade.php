@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

        
<ul class="dropdown-menu">
    @foreach ($parentCategories as $rs)

        <li><a class="dropdown-item" href="#"> {{ $rs->title }} &raquo </a>
            @if (count($rs->children))
            
                @include('home.categorytree',['children' => $rs->children])
            @endif  
            
        </li>

    @endforeach
</ul>
              
           
      

