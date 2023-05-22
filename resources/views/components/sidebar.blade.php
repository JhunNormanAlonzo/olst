<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link"
                @if(auth()->user()->getRoleNames()->first() == 'super-admin')
                    href="{{route('super-admin.index')}}"
                @elseif(auth()->user()->getRoleNames()->first() == 'driver')
{{--                    href="{{route('driver.index')}}"--}}
                @elseif(auth()->user()->getRoleNames()->first() == 'customer')
                    href="{{route('customer.index')}}"
                @endif
            >
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        @if(auth()->user()->getRoleNames()->first() == 'super-admin')
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-truck-front"></i><span>Trucks</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('truck.create')}}">
                            <i class="bi bi-circle"></i><span>Add Truck</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('truck.index')}}">
                            <i class="bi bi-circle"></i><span>View Truck</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-universal-access"></i><span>Drivers</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('driver.create')}}">
                            <i class="bi bi-circle"></i><span>Add Drivers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('driver.index')}}">
                            <i class="bi bi-circle"></i><span>View Drivers</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('user.create')}}">
                            <i class="bi bi-circle"></i><span>Add Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.index')}}">
                            <i class="bi bi-circle"></i><span>View Users</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-globe"></i><span>Locations</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Add Location</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>View Location</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-qr-code"></i><span>QR Codes</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Generate QR Code</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>List Generated</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#orders" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-cart-check-fill text-success"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="orders" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route('super-admin-order.create')}}">
                            <i class="bi bi-circle"></i><span>Add Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('super-admin-order.index')}}">
                            <i class="bi bi-circle"></i><span>View Orders</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('super-admin-order.history')}}">
                            <i class="bi bi-circle"></i><span>Orders History</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
        @endif

        @if(auth()->user()->getRoleNames()->first() == 'customer')

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('order.create')}}">
                    <i class="bi bi-cart-dash-fill"></i>
                    <span>Request Order</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('pending-order.index')}}">
                    <i class="bi bi-truck-flatbed"></i>
                    <span>Pending Order</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-truck-front"></i>
                    <span>Active Order</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('customer.order_history')}}">
                    <i class="bi bi-collection"></i>
                    <span>Order History</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('address.index')}}">
                    <i class="bi bi-globe2"></i>
                    <span>My Addresses</span>
                </a>
            </li><!-- End Profile Page Nav -->
        @endif


    </ul>

</aside><!-- End Sidebar-->
