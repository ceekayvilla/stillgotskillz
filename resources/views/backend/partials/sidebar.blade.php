<div class="sidebar-menu">

    <div class="sidebar-header">
        <div class="logo">
            {{-- <a href="{{route('admin.settings')}}"><img src="{{ asset('storage/'.config('settings.site_logo'))}}" alt="logo"></a>--}}
        </div>
    </div>

    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <!-- Categories Menu-->
                    @include('backend.partials.sidebar-links.categories');

                </ul>
            </nav>
        </div>
    </div>


</div>