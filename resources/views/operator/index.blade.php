<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Tables / General - Admin Bootstrap Template</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="{{asset('admintemplate/img/favicon.png')}}" rel="icon">
      <link href="{{asset('admintemplate/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="{{asset('admintemplate/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/quill.snow.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/quill.bubble.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/remixicon.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/simple-datatables.css')}}" rel="stylesheet">
      <link href="{{asset('admintemplate/css/style2.css')}}" rel="stylesheet">
   </head>
   <body>
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between"> <a href="index.html" class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt=""> <span class="d-none d-lg-block"></span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
         <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Search" title="Enter search keyword"> <button type="submit" title="Search"><i class="bi bi-search"></i></button></form>
         </div>
         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i class="bi bi-search"></i> </a></li>
               <li class="nav-item dropdown">
                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-bell"></i> <span class="badge bg-primary badge-number">4</span> </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                     <li class="dropdown-header"> You have 4 new notifications <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                           <h4>Lorem Ipsum</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>30 min. ago</p>
                        </div>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                           <h4>Atque rerum nesciunt</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>1 hr. ago</p>
                        </div>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                           <h4>Sit rerum fuga</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>2 hrs. ago</p>
                        </div>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                           <h4>Dicta reprehenderit</h4>
                           <p>Quae dolorem earum veritatis oditseno</p>
                           <p>4 hrs. ago</p>
                        </div>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="dropdown-footer"> <a href="#">Show all notifications</a></li>
                  </ul>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i class="bi bi-chat-left-text"></i> <span class="badge bg-success badge-number">3</span> </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                     <li class="dropdown-header"> You have 3 new messages <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="message-item">
                        <a href="#">
                           <img src="{{asset('admintemplate/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                           <div>
                              <h4>Jassa</h4>
                              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                              <p>4 hrs. ago</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="message-item">
                        <a href="#">
                           <img src="{{asset('admintemplate/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                           <div>
                              <h4>Jassa</h4>
                              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                              <p>6 hrs. ago</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="message-item">
                        <a href="#">
                           <img src="{{asset('admintemplate/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                           <div>
                              <h4>Jassa</h4>
                              <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                              <p>8 hrs. ago</p>
                           </div>
                        </a>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li class="dropdown-footer"> <a href="#">Show all messages</a></li>
                  </ul>
               </li>
               <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="{{asset('admintemplate/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">Jassa</span> </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                        <h6>Jassa</h6>
                        <span>Web Designer</span>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i class="bi bi-person"></i> <span>My Profile</span> </a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i class="bi bi-gear"></i> <span>Account Settings</span> </a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> <a class="dropdown-item d-flex align-items-center" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>Need Help?</span> </a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="bi bi-box-arrow-right"></i> <span>Logout</span> </a></li>
                  </ul>
               </li>
            </ul>
         </nav>
      </header>
      <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item mt-3"> <a class="nav-link collapsed" href="index.html"> <i class="bi bi-layout-text-window-reverse"></i> <span>Daftar Antrian</span> </a></li>

            <li class="nav-heading">Pages</li>
            <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-login.html"> <i class="bi bi-box-arrow-in-left"></i> <span>Logout</span> </a></li>
         </ul>
      </aside>
      <main id="main" class="main">
         <section class="section">
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Daftar Antrian</h5>
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Position</th>
                                 <th scope="col">Age</th>
                                 <th scope="col">Start Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Brandon Jacob</td>
                                 <td>Designer</td>
                                 <td>28</td>
                                 <td>2016-05-25</td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>Bridie Kessler</td>
                                 <td>Developer</td>
                                 <td>35</td>
                                 <td>2014-12-05</td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>Ashleigh Langosh</td>
                                 <td>Finance</td>
                                 <td>45</td>
                                 <td>2011-08-12</td>
                              </tr>
                              <tr>
                                 <th scope="row">4</th>
                                 <td>Angus Grady</td>
                                 <td>HR</td>
                                 <td>34</td>
                                 <td>2012-06-11</td>
                              </tr>
                              <tr>
                                 <th scope="row">5</th>
                                 <td>Raheem Lehner</td>
                                 <td>Dynamic Division Officer</td>
                                 <td>47</td>
                                 <td>2011-04-19</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
       <script src="{{asset('admintemplate/js/apexcharts.min.js')}}"></script>
       <script src="{{asset('admintemplate/js/bootstrap.bundle.min.js')}}"></script>
       <script src="{{asset('admintemplate/js/chart.min.js')}}"></script>
       <script src="{{asset('admintemplate/js/echarts.min.js')}}"></script>
       <script src="{{asset('admintemplate/js/quill.min.js')}}"></script>
       <script src="{{asset('admintemplate/js/simple-datatables.js')}}"></script>
       <script src="{{asset('admintemplate/js/tinymce.min.js')}}"></script>
       <script src="{{asset('admintemplate/js/validate.js')}}"></script>
       <script src="{{asset('admintemplate/js/main.js')}}"></script> 
            
  </body>
</html>