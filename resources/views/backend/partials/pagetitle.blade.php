<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">{{ $pageTitle }} | {{$subTitle}}</h4>
                <ul class="breadcrumbs pull-left">
                    <!-- <li><a href="index.html">Home</a></li>
                    <li><span>Dashboard</span></li>
 -->                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">KBL Admin<i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="#">Message</a> -->
                    {{-- <a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a> --}}
                    <a class="dropdown-item" href="{{ route('admin.logout') }}">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>