<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link text-center ">
        <img src="{{ asset('backend/dist/img/logo_full.gif') }}" alt="AdminLTE Logo" class="brand-image pl-3  elevation-3" style="opacity: .8">
        <br><span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Upload_image/'.Auth::user()->profile_photo_path) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info text-white">
                <a href="{{route('admin.home')}}" class="d-block"></a>
                {{ Auth::user()->name }}

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link {{request()->is('admin/home')?'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                {{--    <li class="nav-header">LABELS</li --}}




                <li class="nav-item">
                    <a href="#" class="nav-link {{(request()->is('admin/all')?'active': request()->is('admin/add_member'))?'active':'' }}">
                      <i class="nav-icon fas fa-address-book"></i>
                      <p>
                        Members
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.all')}}" class="nav-link {{request()->is('admin/all')?'active':''}}">
                                <i class="nav-icon fas fa-users "></i>
                                <p class="text">All Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.add_member')}}" class="nav-link {{request()->is('admin/add_member')?'active':''}}">
                                <i class="nav-icon fas fa-user-plus "></i>
                                <p class="text">Add Member</p>
                            </a>
                        </li>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link  {{(request()->is('admin/all_admin')?'active': request()->is('admin/create_admin'))?'active':'' }}">
                      <i class="nav-icon fas fa-user-tie"></i>
                      <p>
                        Admins
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.view_admin')}}" class="nav-link {{request()->is('admin/all_admin')?'active':''}}">
                                <i class="nav-icon fas fa-users "></i>
                                <p class="text">All Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.create_admin')}}" class="nav-link {{request()->is('admin/create_admin')?'active':''}}">
                                <i class="nav-icon fas fa-user-plus "></i>
                                <p class="text">Add Admin</p>
                            </a>
                        </li>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/basic" class="nav-link {{request()->is('admin/basic')?'active':''}}">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Basic Amount</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/installment" class="nav-link {{request()->is('admin/installment')?'active':''}}">
                        <i class="nav-icon far fa-money-bill-alt "></i>
                        <p>Installment</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
