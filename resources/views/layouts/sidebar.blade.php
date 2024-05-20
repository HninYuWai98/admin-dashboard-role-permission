<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../dashboard" class="brand-link">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <div class="form-inline mt-3">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link">
                    <p>
                        User
                    </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link">
                    <p>
                        Role
                    </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>Permission</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('brands.index')}}" class="nav-link">
                        <p>Brand</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link">
                    <p>
                        Category
                    </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>
                        Product
                    </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>
                        Customer
                    </p>
                    </a>
                </li>

                @can('order_listing')
                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>Order</p>
                    </a>
                </li>
                @endcan

                <li class="nav-item">
                    <a href="" class="nav-link">
                    <p>Contacts</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../examples/faq.html" class="nav-link">
                    <p>FAQ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../examples/contact-us.html" class="nav-link">
                    <p>Contact us</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
