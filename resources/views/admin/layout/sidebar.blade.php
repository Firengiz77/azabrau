  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{route('admin.index')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
             <img src="{{ asset('admin/logo/logo.jpg') }}" >
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">AzAbrau</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item @if(Route::is('admin.index')) active @endif">
              <a href="{{route('admin.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>


            <li class="menu-item @if(Route::is('admin.account') || Route::is('admin.register')) active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{route('admin.account')}}" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{route('admin.register')}}" class="menu-link">
                    <div data-i18n="Notifications">Add Admin</div>
                  </a>
                </li>
                  @php
                      $id=auth()->id();
                      $admin=App\Models\User::find($id);
                  @endphp
                  @if($admin->superadmin === '1')
                  <li class="menu-item">
                      <a href="{{route('admin.all_admin')}}" class="menu-link">
                          <div data-i18n="Notifications">All Admin</div>
                      </a>
                  </li>
                      @endif
              </ul>
            </li>

            <li class="menu-item @if(Route::is('admin.slider')) active @endif">
              <a href="{{route('admin.slider')}}" class="menu-link">
                <i class='bx bx-image-alt menu-icon'></i>
                <div data-i18n="Slider">Slider</div>
              </a>
            </li>

            <li class="menu-item @if(Route::is('admin.contact')) active @endif">
              <a href="{{route('admin.contact')}}" class="menu-link">
                <i class='bx bx-phone menu-icon'></i>
                <div data-i18n="Contact">Contact</div>
              </a>
            </li>
            <li class="menu-item @if(Route::is('admin.blog')) active @endif">
              <a href="{{route('admin.blog')}}" class="menu-link">
                <i class='bx bxl-blogger menu-icon'></i>
                <div data-i18n="Blog">Blog</div>
              </a>
            </li>
            <li class="menu-item @if(Route::is('admin.message')) active @endif">
              <a href="{{route('admin.message')}}" class="menu-link">
                <i class='bx bx-message-rounded-dots menu-icon' ></i>
                <div data-i18n="Blog">Message</div>
              </a>
            </li>
            <li class="menu-item @if(Route::is('admin.category')) active @endif">
              <a href="{{route('admin.category')}}" class="menu-link">
                <i class='bx bxs-user-check menu-icon'></i>
                <div data-i18n="Category">Category</div>
              </a>
            </li>


            <li class="menu-item @if(Route::is('admin.sales_point')) active @endif">
              <a href="{{route('admin.sales_point')}}" class="menu-link">
                <i class='bx bxs-user-check menu-icon'></i>
                <div data-i18n="Category">Sales Point</div>
              </a>
            </li>


          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
