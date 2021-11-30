<?php
use App\Models\Category;
$categories = Category::orderBy('name','asc')->get();
?>
<li class="{{ Route::currentRouteName() == 'admin.categories.view' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-medall"></i><span>Submissions</span></a>
        <ul class="collapse">
            @foreach($categories as $category)
                @if($category->logos()->count()>0)
                     <li class="{{ $category->id==request()->id? 'active':'' }}">
                        <a href="{{ route('admin.categories.view',$category->id) }}">
                            {{ $category->name }} - {{$category->logos()->count()}}
                        </a>
                     </li>
                 @endif
            @endforeach
            
        </ul>
    }
</li>