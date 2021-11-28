<li class="{{ Route::currentRouteName() == 'admin.categories.index' || Route::currentRouteName() == 'admin.categories.create' || Route::currentRouteName() == 'admin.categories.edit' || Route::currentRouteName() == 'admin.categories.trash' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-medall"></i><span>Products</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''}}">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="ti-view-list"></i>Active Categories
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.categories.create' ? 'active' : ''}}">
                <a href="{{ route('admin.categories.create') }}">
                   <i class="ti-plus"></i> Add a Category
                </a>
            <li class="{{ Route::currentRouteName() == 'admin.categories.trash' ? 'active' : ''}}">
                <a href="{{ route('admin.categories.trash') }}">
                   <i class="ti-trash"></i> Dormant Categories
                </a>
            </li>
            
        </ul>
    
</li>
