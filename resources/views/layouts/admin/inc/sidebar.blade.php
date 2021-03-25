<!--
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <i data-feather="home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i data-feather="shopping-cart"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
-->

<ul class="nav">
    <li class="nav-item active  ">
        <a class="nav-link" href="/admin">
            <i class="material-icons">dashboard</i>
            <p class="">Dashboard</p>
        </a>
    </li>

  {{-- usermanagement  --}}
  <li class="nav-item dropdown">
    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="material-icons">content_paste</i>
        <p>User Management </p>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('/admin/user-management/admins') }}">
                <i class="material-icons">content_paste</i>
                <p>Admin</p>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admin/user-management/users') }}">
                <i class="material-icons">content_paste</i>
                <p>Customer</p>
            </a>
        </div>
    </a>
</li>


    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">content_paste</i>
            <p>Products Management</p>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Suppliers</p>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Categories</p>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Products</p>
                </a>
            </div>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./typography.html">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./rtl.html">
            <i class="material-icons">language</i>
            <p>RTL Support</p>
        </a>
    </li>
</ul>
