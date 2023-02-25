@include('layouts.head')
<header id="header" class="header fixed-top d-flex align-items-center">
   <div class="d-flex align-items-center justify-content-between"> <a href="#" class="logo d-flex align-items-center"> <img src="#" alt=""> <span class="d-none d-lg-block">Mengantri</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
   <nav class="header-nav ms-auto">
      @auth
         <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"><img src="{{asset('admintemplate/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle"><span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span></a>
         <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
               <h6>{{ auth()->user()->name }}</h6>
               <span>{{ auth()->user()->level }}</span>
            </li>

            {{-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center" href="/dashboard/operator"><i class="bi bi-grid"></i><span>Dashboard</span></a></li>
               
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item d-flex align-items-center" href="/daftar/antrian"><i class="bi bi-list-ul"></i><span>Daftar Antrian</span></a></li> --}}

            <li><hr class="dropdown-divider"></li>
            <li>
               <form action="/logout" method="post" >
                  @csrf
                  <button type="submit" class="dropdown-item d-flex align-items-center">
                     <i class="bi bi-box-arrow-in-left"></i> Logout
                  </button>
               </form>
            </li>
         </ul>
      @else
         <ul class="d-flex align-items-center">
            <li class="nav-item"> <a class="nav-link collapsed" href="/login"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
         </ul>
      @endauth
    </nav>
</header>