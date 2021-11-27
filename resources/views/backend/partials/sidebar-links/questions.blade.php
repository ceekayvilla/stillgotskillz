<li class="{{ Route::currentRouteName() == 'admin.questions.index' || Route::currentRouteName() == 'admin.questions.create' || Route::currentRouteName() == 'admin.questions.trash' ? 'active' : '' }}">
    <a href="javascript:void(0)" aria-expanded="false"><i class="fa fa-question"></i><span>Questions</span></a>
        <ul class="collapse">
            <li class="{{ Route::currentRouteName() == 'admin.questions.index' ? 'active' : ''}}">
                <a href="{{ route('admin.questions.index') }}">
                    <i class="ti-view-list"></i>Active Questions
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == 'admin.questions.create' ? 'active' : ''}}">
                <a href="{{ route('admin.questions.create') }}">
                   <i class="ti-plus"></i> Add Question
                </a>
            <li class="{{ Route::currentRouteName() == 'admin.questions.trash' ? 'active' : ''}}">
                <a href="{{ route('admin.questions.trash') }}">
                   <i class="ti-trash"></i> Deleted Questions
                </a>
            </li>
            
        </ul>
    
</li>