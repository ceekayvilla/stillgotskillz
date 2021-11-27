<li class="{{ Route::currentRouteName() == 'admin.prizes.index' || Route::currentRouteName() == 'admin.prizes.create' || Route::currentRouteName() == 'admin.prizes.trash' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-medall"></i><span>Prizes</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.prizes.index' ? 'active' : ''}}">
                <a href="{{ route('admin.prizes.index') }}">
                    <i class="ti-view-list"></i>Active Prizes
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.prizes.create' ? 'active' : ''}}">
                <a href="{{ route('admin.prizes.create') }}">
                   <i class="ti-plus"></i> Add a Prize
                </a>
            <li class="{{ Route::currentRouteName() == 'admin.prizes.trash' ? 'active' : ''}}">
                <a href="{{ route('admin.prizes.trash') }}">
                   <i class="ti-trash"></i> Dormant Prizes
                </a>
            </li>
            
        </ul>
    
</li>
