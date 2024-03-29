<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tahrim Ecom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{Auth::user()->name}} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="home/" @if(request()->segment(1)=='home') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>

          <li class="nav-item ">
            <a href="{{asset('category/')}}" @if(request()->segment(1)=='category') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category List
               
              </p>
            </a>
            
          </li>

          <li class="nav-item ">
            <a href="{{asset('sub-category/')}}" @if(request()->segment(1)=='sub-category') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sub Category List
               
              </p>
            </a>
            
          </li>
          <li class="nav-item ">
            <a href="{{asset('product/')}}" @if(request()->segment(1)=='product') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Create Product
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            
          </li>

          <li class="nav-item ">
            <a href="{{asset('product-list/')}}" @if(request()->segment(1)=='product-list') class="nav-link active" @else class="nav-link" @endif>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>