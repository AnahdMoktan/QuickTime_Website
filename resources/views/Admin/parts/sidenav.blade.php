 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('assets/img/logo/favicon.png')}}" alt="Logo" class="brand-image ">
      <span class="brand-text font-weight-light">Quick Time</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('admin/img/Admin/admin.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Anahd Moktan</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="{{url('adminquicktime')}}" class="nav-link active">
                <i class="nav-icon fas fa-th-large"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eject"></i>
             <!--  <i class="nav-icon fas fa-tree"></i> -->
              <p>
                About Us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('aboutus') }}" class="nav-link">
                  <i class="nav-icon far fa-address-card"></i>
                  <p>Introduction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('ourteams') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Our Team</p>
                </a>
              </li>
              
              <!-- <li class="nav-item">
                <a href="{{ url('careers') }}" class="nav-link">
                  <i class="nav-icon fas fa-check-square"></i>
                  <p>Careers</p>
                </a>
              </li> -->
            </ul>
          </li>
            
            <li class="nav-item">
              <a href="{{ url('homeslider') }}" class="nav-link">
                <i class="nav-icon fas fa-images"></i>
                    <p>Slider</p>
                </a>
              </li>
              
              <!-- <li class="nav-item">
                <a href="{{ url('ourservices') }}" class="nav-link">
                  <i class="nav-icon fab fa-stripe-s"></i>
                  <p>Our Services</p>
                </a>
              </li> -->
               <li class="nav-item">
              <a href="{{ url('designservices') }}" class="nav-link">
                <i class=" nav-icon fas fa-pencil-ruler"></i>
                    <p>Design Services</p>
                    <!-- <i class="fas fa-angle-left right"></i> -->
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{ url('dservices') }}" class="nav-link">
                  <i class=" nav-icon fas fa-pencil-ruler"></i>
                  <p>Design Services</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ url('testimonial') }}" class="nav-link">
                  <i class=" nav-icon fas fa-quote-right"></i>
                  <p>Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('logo') }}" class="nav-link">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>Our Clients</p>
                </a>
              </li>
          
          
          <li class="nav-item">
            <a href="{{ url('printingservices') }}" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Printing Services
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('equipments') }}" class="nav-link">
              <i class="nav-icon fas fa-hdd"></i>
              <p>Equipments</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('printing-orders')}}" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Order</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>