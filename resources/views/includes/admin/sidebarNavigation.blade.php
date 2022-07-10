<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
  <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <h1><a class="navbar-brand" href="{{ route('adminDashboard') }}"><span class="fa fa-area-chart"></span> Smartinva<span class="dashboard_text">Dashboard</span></a></h1>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="sidebar-menu">
          <li class="header">WELCOME ADMIN</li>
          <li class="treeview">
            <a href="{{ route('adminDashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Admin</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href=" {{ route('adminUsers') }} "><i class="fa fa-angle-right"></i> User</a></li>
              <li><a href="{{ route('adminSuppliers') }}"><i class="fa fa-angle-right"></i> Supplier</a></li>
              <li><a href="{{ route('adminCustomers') }}"><i class="fa fa-angle-right"></i> Customer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="{{ route('adminCharts') }}">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <!--Word in red color -->
            <span class="label label-primary pull-right"></span>
            </a>
          </li>
          <li class="treeview">
            <a href="{{ route('adminProducts') }}">
            <i class="fa fa-th"></i> <span>Products</span>
            <!--number of items -->
            <small class="label pull-right label-info"></small>
            </a>
          </li>  
          <li class="treeview">
              <a href="{{ route('adminPurchases') }}">
              <i class="fa fa-shopping-cart"></i> <span>Purchases</span>
              <!--number of items -->
              <small class="label pull-right label-info"></small>
              </a>
          </li>  
          </ul>
      </div>
      <!-- /.navbar-collapse -->
  </nav>
</aside>
</div>
