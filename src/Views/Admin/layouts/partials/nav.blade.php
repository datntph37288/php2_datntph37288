






<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('img/logo.png')}}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="{{ url('admin/') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
            
        </li>

        <li class>
            <a href="{{ url('admin/users/') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/5.svg') }}" alt>
                </div>
                <span>User</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/products/') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Product</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/categories/') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Category</span>
            </a>
        </li>
    
    </ul>
</nav>