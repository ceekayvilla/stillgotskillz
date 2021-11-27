<li class="{{ Route::currentRouteName() == 'admin.stock.index' || Route::currentRouteName() == 'admin.stock.create' || Route::currentRouteName() == 'admin.stock.edit' ? 'active' : ''  }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-shopping-cart-full"></i><span>Stock Management</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.stock.index' ? 'active' : ''}}">
                <a href="{{ route('admin.stock.index') }}">
                    <i class="ti-view-list"></i>Manage Stock
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.stock.create' ? 'active' : ''}}">
                <a href="{{ route('admin.stock.create') }}">
                   <i class="ti-plus"></i> Add Stock
                </a>
            
        </ul>
    
</li>
