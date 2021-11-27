<li class="{{ Route::currentRouteName() == 'admin.topics.index' || Route::currentRouteName() == 'admin.topics.create' || Route::currentRouteName() == 'admin.topics.trash' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="ti-tag"></i><span>Topics</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.topics.index' ? 'active' : ''}}">
                <a href="{{ route('admin.topics.index') }}">
                    <i class="ti-view-list"></i>Active Topics
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.topics.create' ? 'active' : ''}}">
                <a href="{{ route('admin.topics.create') }}">
                   <i class="ti-plus"></i> Add Topic
                </a>
            <li class="{{ Route::currentRouteName() == 'admin.topics.trash' ? 'active' : ''}}">
                <a href="{{ route('admin.topics.trash') }}">
                   <i class="ti-trash"></i> Dormant Topics
                </a>
            </li>
            
        </ul>
    
</li>