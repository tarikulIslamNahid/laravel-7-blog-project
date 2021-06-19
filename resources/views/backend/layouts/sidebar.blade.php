
@php
$prefixed =Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp
{{-- @dd($route) --}}
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{route('admin.dashboard')}}" data-active="{{($route=='admin.dashboard') ? 'true' :''}}"  aria-expanded="{{($route=='admin.dashboard') ? 'true' :''}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>

                </a>

            </li>


            <li class="menu">
                <a href="{{route('admin.user.index')}}" data-active="{{($route=='admin.user.index') || ($route=='admin.user.edit') ? 'true' :''}}" aria-expanded="{{($route=='admin.user.index') || ($route=='admin.user.edit') ? 'true' :''}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Users</span>
                    </div>
                </a>
            </li>


            <li class="menu">
                <a href="#category" data-toggle="collapse"  data-active="{{($route=='admin.category.index') || ($route=='admin.category.create') ||  ($route=='admin.category.edit') ? 'true' :''}}" aria-expanded="{{($route=='admin.category.index') || ($route=='admin.category.create') ||  ($route=='admin.category.edit') ? 'true' :''}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Categories</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="category" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('admin.category.index')}}"> Categories List </a>
                    </li>
                    <li>
                        <a href="{{route('admin.category.create')}}"> Create Categories </a>
                    </li>
                </ul>
            </li>


        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
