  <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar flex items-center justify-center !mr-2 !border-none"><img src="img/admin-icon.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin</h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('/dashboard')}}"> <i class="icon-home"></i>Dashboard </a></li>
                <li><a href="{{route('vehicles.index')}}"> <i class="icon-grid"></i>Vehicles </a></li>
                <li><a href="{{route('bookings.index')}}"> <i class="icon-grid"></i>Bookings</a></li>

      </nav>
      <!-- Sidebar Navigation end-->
