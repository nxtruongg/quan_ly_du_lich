<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link navbar-info">
        <img src="{!! asset('admin/dist/img/AdminLTELogo.png') !!}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Trang Quản Trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        @php
            $user = Auth::guard('admins')->user();
        @endphp
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{!! $user->name !!}</a>
        </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.home') }}" class="nav-link {{ isset($home_active) ? $home_active : '' }}">
                        <i class="nav-icon fas fa fa-home"></i>
                        <p>Bảng điều khiển</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('category.index') }}" class="nav-link {{ isset($category_active) ? $category_active : '' }}">
                        <i class="nav-icon fa fa-list"></i>
                        <p>Danh mục</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('article.index') }}" class="nav-link {{ isset($article_active) ? $article_active : '' }}">
                        <i class="nav-icon fas fa-file-word" aria-hidden="true"></i>
                        <p>Bài viết</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('location.index') }}" class="nav-link {{ isset($location_active) ? $location_active : '' }}">
                        <i class="nav-icon fas fa-map-marker-alt" aria-hidden="true"></i>
                        <p>Địa điểm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tour.index') }}" class="nav-link {{ isset($tour_active) ? $tour_active : '' }}">
                        <i class="nav-icon fas fa-th-large" aria-hidden="true"></i>
                        <p> Danh sách tour</p>
                    </a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a href="{{ route('group.permission.index') }}" class="nav-link {{ isset($group_permission) ? $group_permission : '' }}">--}}
                        {{--<i class="nav-icon fa fa-hourglass" aria-hidden="true"></i>--}}
                        {{--<p>Nhóm quyền</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="{{ route('permission.index') }}" class="nav-link {{ isset($permission_active) ? $permission_active : '' }}">--}}
                        {{--<i class="nav-icon fa fa-balance-scale"></i>--}}
                        {{--<p> Quyền </p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a href="{{ route('role.index') }}" class="nav-link {{ isset($role_active) ? $role_active : '' }}">
                        <i class="nav-icon fa fa-gavel" aria-hidden="true"></i>
                        <p> Vai trò </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ isset($user_active) ? $user_active : '' }}">
                        <i class="nav-icon fa fa-fw fa-user" aria-hidden="true"></i>
                        <p> Người dùng </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
