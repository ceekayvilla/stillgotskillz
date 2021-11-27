<li class="{{ Route::currentRouteName() == 'admin.outlets.index'|| Route::currentRouteName() =='admin.outlets.create' || Route::currentRouteName() =='admin.outlets.trash' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-home"></i><span>Outlets</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.outlets.index' ? 'active' : ''}}">
                <a href="{{ route('admin.outlets.index') }}">
                    <i class="ti-view-list"></i>Active Outlets
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.outlets.create' ? 'active' : ''}}">
                <a href="{{ route('admin.outlets.create') }}">
                   <i class="ti-plus"></i> Add Outlet
                </a>
            <li class="{{ Route::currentRouteName() == 'admin.outlets.trash' ? 'active' : ''}}">
                <a href="{{ route('admin.outlets.trash') }}">
                   <i class="ti-trash"></i> Dormant Outlets
                </a>
            </li>
            
        </ul>
    
</li>