<li class="{{ Route::currentRouteName() == 'admin.managers.index'|| Route::currentRouteName() =='admin.managers.create' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-home"></i><span>Managers</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.managers.index' ? 'active' : ''}}">
                <a href="{{ route('admin.managers.index') }}">
                    <i class="ti-view-list"></i>All Managers
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.managers.create' ? 'active' : ''}}">
                <a href="{{ route('admin.managers.create') }}">
                   <i class="ti-plus"></i> Add Manager
                </a>
           
            
        </ul>
    
</li>