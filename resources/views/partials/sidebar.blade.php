<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         @auth
            @if (auth()->user()->level=="opk")
               <a class="nav-link collapsed {{ ($active === "operator") ? 'active' : '' }}" href="/dashboard/operator/karantina"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
               <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian/karantina"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>              
            @elseif (auth()->user()->level=="opm")
               <a class="nav-link collapsed {{ ($active === "operator") ? 'active' : '' }}" href="/dashboard/operator/mutu"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
               <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian/mutu"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>              
            @elseif (auth()->user()->level=="ocs")
               <a class="nav-link collapsed {{ ($active === "operator") ? 'active' : '' }}" href="/dashboard/operator/cs"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
               <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian/cs"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>              
            @elseif (auth()->user()->level=="pengunjung")
               <a class="nav-link collapsed {{ ($active === "pengunjung") ? 'active' : '' }}" href="/dashboard"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
               <a class="nav-link collapsed {{ ($active === "antrian") ? 'active' : '' }}" href="/ambil/antrian"> <i class="bx bxs-add-to-queue"></i><span>Ambil Antrian</span> </a>
               <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>  
            @elseif (auth()->user()->level=="admin")
               <a class="nav-link collapsed {{ ($active === "admin") ? 'active' : '' }}" href="/dashboard/admin"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
               <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian/admin"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>   
            @endif
         @else
            <a class="nav-link collapsed {{ ($active === "pengunjung") ? 'active' : '' }}" href="/dashboard"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
            <a class="nav-link collapsed {{ ($active === "antrian") ? 'active' : '' }}" href="/ambil/antrian"> <i class="bx bxs-add-to-queue"></i><span>Ambil Antrian</span> </a>
            <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>  
         @endauth
      </li>
      @auth
         <li class="nav-item">
            <form action="/logout" method="post" class="nav-link collapsed">
               @csrf
                  <button type="submit">
                     <i class="bi bi-box-arrow-in-left"></i><span>Logout</span>
                  </button>
            </form>
         </li>
      @else
         <li class="nav-heading">Pages</li>
         <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>F.A.Q</span> </a></li>
         <li class="nav-item"> <a class="nav-link collapsed" href="pages-contact.html"> <i class="bi bi-envelope"></i> <span>Contact</span> </a></li>
         <li class="nav-item"> <a class="nav-link collapsed" href="/login"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
      @endauth 
   </ul>
</aside>