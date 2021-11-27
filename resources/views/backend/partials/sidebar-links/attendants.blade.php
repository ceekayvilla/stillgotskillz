<li class="{{ Route::currentRouteName() == 'admin.attendants.index'|| Route::currentRouteName() =='admin.attendants.create' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-home"></i><span>Attendants</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.attendants.index' ? 'active' : ''}}">
                <a href="{{ route('admin.attendants.index') }}">
                    <i class="ti-view-list"></i>All Attendants
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.attendants.create' ? 'active' : ''}}">
                <a href="{{ route('admin.attendants.create') }}">
                   <i class="ti-plus"></i> Add Attendant
                </a>
           
            
        </ul>
    
</li>