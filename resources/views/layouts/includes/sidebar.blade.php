<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"
             href="{{route('exercise.index')}}"><span class="brand-logo">
                    <h2 class="brand-text">{{env('APP_NAME')}}</h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
     <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <!--  Start SideBar     -->
            <li class=" nav-item {{ Route::is('exercise.index') ? 'active' : ''  }} ">
                <a class="d-flex align-items-center "
                   href="{{route('exercise.index')}}">
                    <i data-feather="box"></i><span class="menu-title text-truncate"
                    data-i18n="Form Layout">Dashboard</span></a>
            </li>


            <li class=" nav-item {{ Route::is('exercise.days') ? 'active' : ''  }} ">
                <a class="d-flex align-items-center "
                   href="{{route('exercise.days')}}">
                    <i data-feather="box"></i><span class="menu-title text-truncate"
                    data-i18n="Form Layout">Days in Current Months</span></a>
            </li>



            <li class=" nav-item {{ Route::is('exercise.months') ? 'active' : ''  }} ">
                <a class="d-flex align-items-center "
                   href="{{route('exercise.months')}}">
                    <i data-feather="box"></i><span class="menu-title text-truncate"
                    data-i18n="Form Layout">Max Months</span></a>
            </li>
            <!-- End SideBar -->
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
