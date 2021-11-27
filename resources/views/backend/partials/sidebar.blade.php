<div class="sidebar-menu">

    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin.settings')}}"><img src="{{ asset('storage/'.config('settings.site_logo'))}}" alt="logo"></a>
        </div>
    </div>

    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <!-- settings -->
                    @include('backend.partials.sidebar-links.settings')
                    <!-- end settings -->

                    <!-- Prizes -->
                    @include('backend.partials.sidebar-links.prizes')
                    <!-- end Prizes -->

                    <!-- Outlets -->
                    @include('backend.partials.sidebar-links.outlets')
                    <!-- end Outlets -->

                    <!-- Attendants -->
                    @include('backend.partials.sidebar-links.attendants')
                    <!-- end Attendants -->

                    <!-- Managers -->
                    @include('backend.partials.sidebar-links.managers')
                    <!-- end Managers -->

                    <!-- Products -->
                    @include('backend.partials.sidebar-links.products')
                    <!-- end Products -->

                    <!-- Topics -->
                    @include('backend.partials.sidebar-links.topics')
                    <!-- end Topics -->

                    <!-- Questions -->
                    @include('backend.partials.sidebar-links.questions')
                    <!-- end Questions -->

                    <!-- Stock -->
                    @include('backend.partials.sidebar-links.stock')
                    <!-- end Stock -->

                </ul>
            </nav>
        </div>
    </div>


</div>