{{-- <li class="nav-item"><a href="#" class="nav-link text-small pb-0">{{$item->category_name}}</a></li> --}}

<li class="nav-item text-small">{{$child_category->category_name}}</li>
@if ($child_category->category)
<ul>
    @foreach ($child_category->category as $childrenCategory)
    @include('pages.category.child_category',['child_category'=>$childrenCategory])
    @endforeach 
</ul>
    
@endif