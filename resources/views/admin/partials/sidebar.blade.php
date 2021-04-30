<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">PSIS</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.home' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.home') }}"><i class="fas fa-fire"></i> <span>Home</span></a></li>
    
      <li class="menu-header">Admin</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fas fa-users"></i> <span>Users</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.data' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.data') }}"><i class="fas fa-database"></i></i> <span>Data SKCK</span></a>
      <li class="{{ Request::route()->getName() == 'admin.dataen' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dataen') }}"><i class="fas fa-database"></i></i> <span>Data SKCK EN</span></a>
      <li class="{{ Request::route()->getName() == 'admin.datatakeaway' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.datatakeaway') }}"><i class="fas fa-database"></i></i> <span>Data Take Away</span></a>
      <li class="{{ Request::route()->getName() == 'admin.datadelivery' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.datadelivery') }}"><i class="fas fa-database"></i></i> <span>Data Delivery</span></a>
      <!-- <li class="{{ Request::route()->getName() == 'admin.home' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.home') }}"><i class="fas fa-home"></i> <span>Home</span></a> -->
   
      <li class="menu-header">SKCK ONLINE</li>
      <!-- <li class="{{ Request::route()->getName() == 'admin.tik' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.tik') }}"><i class="fas fa-file-alt"></i></i> <span>KARTU Tik</span></a> -->
      <!-- <li class="{{ Request::route()->getName() == 'admin.SKCKForm' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.SKCKForm') }}"><i class="fas fa-sticky-note"></i></i> <span>SKCK</span></a> -->
      <li class="{{ Request::route()->getName() == 'admin.home_choose' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.home_choose') }}"><i class="fas fa-sticky-note"></i></i> <span>SKCK</span></a>
      <li class="menu-header">SKCK Take Away</li>
      <li class="{{ Request::route()->getName() == 'admin.takeaway' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.takeaway') }}"><i class="fas fa-sticky-note"></i></i> <span>Take Away</span></a>
      <li class="{{ Request::route()->getName() == 'admin.uploadtakeaway' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.uploadtakeaway') }}"><i class="fas fa-upload"></i></i> <span>Upload</span></a>
      <li class="menu-header">SKCK Delivery</li>
      <li class="{{ Request::route()->getName() == 'admin.delivery' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.delivery') }}"><i class="fas fa-sticky-note"></i></i> <span>SKCK Delivery</span></a>
      <!-- <li class="{{ Request::route()->getName() == 'admin.takeaway' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.takeaway') }}"><i class="fas fa-sticky-note"></i></i> <span>Delivery</span></a>
      <li class="menu-header">Menu</li> -->
      @if(Auth::user()->can('manage-users'))
      @endif
    </ul>
</aside>
