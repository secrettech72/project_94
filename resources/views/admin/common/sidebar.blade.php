<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('solo/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Sanjay Awal</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Dashboard</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> User
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.user.add') }}"><i class="fa fa-circle-o"></i> User Add</a></li>
                <li><a href="{{ route('admin.user') }}"><i class="fa fa-circle-o"></i> User List</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> Banner
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.banner.add') }}"><i class="fa fa-circle-o"></i> Banner Add</a></li>
                <li><a href="{{ route('admin.banner') }}"><i class="fa fa-circle-o"></i> Banner List</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> Advertisement
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('admin.advertisement.add') }}"><i class="fa fa-circle-o"></i> Advertisement Add</a></li>
                <li><a href="{{ route('admin.advertisement') }}"><i class="fa fa-circle-o"></i> Advertisement List</a></li>
            </ul>
        </li>
    </ul>
</section>