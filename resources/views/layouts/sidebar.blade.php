<div class="min-height-300 bg-gradient-info position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" /">
      <img src="/template-assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">My CashFlow</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('cashflow*') ? 'active' : '' }}" href="/cashflow">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-money-coins text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Cashflow</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-money-bill-wave-alt text-sm opacity-10" style="color: #108ee9;"></i>
          </div>
          <span class="nav-link-text ms-1">DANA</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-wallet text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Gopay</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-money-check text-sm opacity-10" style="color: #fdaf27;"></i>
          </div>
          <span class="nav-link-text ms-1">Jago</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fab fa-paypal text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">ShopeePay</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('resource*') ? 'active' : '' }}" href="/resource">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-archive text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Resource</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="/category">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('subcategory*') ? 'active' : '' }}" href="/subcategory">
          <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Sub Category</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer mx-3 ">
    <div class="card card-plain shadow-none" id="sidenavCard">
      <img class="w-50 mx-auto" src="/template-assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
      <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
          <h6 class="mb-0">&copy;Copyright</h6>
          <p class="text-xs font-weight-bold mb-0">Govinda Kharisma Dewa</p>
        </div>
      </div>
    </div>
    <a class="btn btn-dark btn-sm w-100" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
  </div>
</aside>