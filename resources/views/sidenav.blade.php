<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="has-sub-menu"><a href="{{ route('dashboard') }}"><i class="ti-home"></i>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}"><i class="ti-palette"></i> <span>Orders</span></a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}"><i class="ti-palette"></i> <span>Products</span></a>
                </li>
                <li>
                    <a href="#"><i class="ti-palette"></i> <span>Categories</span></a>
                </li>
                <li>
                    <a href="{{ route('preachers.index') }}"><i class="ti-palette"></i> <span>Preachers</span></a>
                </li>
                <li>
                    <a href="{{ route('bundles.index') }}"><i class="ti-palette"></i> <span>Bundles</span></a>
                </li>
                <li>
                    <a href="{{ route('pins.listPins') }}"><i class="ti-palette"></i> <span>PIN Mgt</span></a>
                </li>
                <li class="has-sub-menu">
                    <a href="#"><i class="ti-package"></i> <span>System Settings</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('users.index') }}"><span>Users</span></a></li>
                        <li><a href="{{ route('roles') }}"><span>Roles & Permissions</span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
