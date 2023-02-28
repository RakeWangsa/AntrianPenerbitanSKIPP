<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         @auth
            <a class="nav-link collapsed {{ ($active === "operator") ? 'active' : '' }}" href="/dashboard/operator"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
            <a class="nav-link collapsed {{ ($active === "daftar antrian") ? 'active' : '' }}" href="/daftar/antrian"> <i class="bi bi-list-ul"></i><span>Daftar Antrian</span> </a>      
         @else
            <a class="nav-link collapsed {{ ($active === "pengunjung") ? 'active' : '' }}" href="/dashboard"> <i class="bi bi-grid"></i><span>Dashboard</span> </a>
            <a class="nav-link collapsed {{ ($active === "antrian") ? 'active' : '' }}" href="/ambil/antrian"> <i class="bx bxs-add-to-queue"></i><span>Ambil Antrian</span> </a>
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