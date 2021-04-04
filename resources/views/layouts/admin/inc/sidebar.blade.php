<ul class="nav">
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="material-icons">dashboard</i>
            <p class="">Dashboard</p>
        </a>
    </li>

  {{-- usermanagement  --}}
  <li class="nav-item dropdown ">
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
                <a class="dropdown-item" href="/admin/product-management/supplier">
                    <i class="material-icons">content_paste</i>
                    <p>Suppliers</p>
                </a>
                <a class="dropdown-item" href="/admin/product-management/category">
                    <i class="material-icons">content_paste</i>
                    <p>Categories</p>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/admin/product-management/product">
                    <i class="material-icons">content_paste</i>
                    <p>Products</p>
                </a>
            </div>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./typography.html">
            <i class="material-icons">bookmarks</i>
            <p>User's Wishlist</p>
        </a>
    </li>
<!--    <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
        </a>
    </li>-->
    <li class="nav-item ">
        <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Stores</p>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="./notifications.html">
            <i class="material-icons">analytics</i>
            <p>Statistics</p>
        </a>
    </li>
<!--    <li class="nav-item ">
        <a class="nav-link" href="./rtl.html">
            <i class="material-icons">language</i>
            <p>RTL Support</p>
        </a>
    </li>-->
</ul>
