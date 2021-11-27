<li class="{{ Route::currentRouteName() == 'admin.products.index' || Route::currentRouteName() == 'admin.products.create' || Route::currentRouteName() == 'admin.products.edit' || Route::currentRouteName() == 'admin.products.trash' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-medall"></i><span>Products</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.products.index' ? 'active' : ''}}">
                <a href="{{ route('admin.products.index') }}">
                    <i class="ti-view-list"></i>Active Products
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.products.create' ? 'active' : ''}}">
                <a href="{{ route('admin.products.create') }}">
                   <i class="ti-plus"></i> Add a Product
                </a>
            <li class="{{ Route::currentRouteName() == 'admin.products.trash' ? 'active' : ''}}">
                <a href="{{ route('admin.products.trash') }}">
                   <i class="ti-trash"></i> Dormant Products
                </a>
            </li>
            
        </ul>
    
</li>
