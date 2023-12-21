<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SukLib</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/Photo/suklib.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center"> <!-- kalau udah selesai ini ganti href ke index.php-->
        <img src="assets/Photo/suklib.png" alt="">
        <span class="d-none d-lg-block">SukLib</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- FITUR SEARCH -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="searching.php">
        <input type="text" name="query" placeholder="Cari" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
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
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
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
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
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
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

          

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" style="padding-top: 10px">
        <a class="nav-link " href="index.php">
          <i class="bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="search.php">
          <i class="bi bi-search"></i>
          <span>Cari</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="riwayat.php">
          <i class="bi bi-journals"></i>
          <span>Riwayat</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="sumbangan_buku.php">
          <i class="bi bi-box2-heart"></i>
          <span>Sumbang Buku</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-graph-up-arrow"></i>
          <span>Literasi</span>
        </a>
      </li><!-- End Register Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <li class="nav-item" style="padding-top: 9cm">
        <a class="nav-link collapsed" href="#" style="font-size: 12px; color: #808080;">
          <span>Tentang Kami</span>
        </a>
      </li><!-- Tentang Kami Page Nav -->


      

    </ul>

  </aside><!-- End Sidebar-->

  <!-- MAIN HOME -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-5">

            <!--Quote Card -->
            <div class="col-xxl-12 col-md-6">
              <div class="card info-card sales-card">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="overflow: hidden;">
                  <div class="carousel-indicators" style="overflow: hidden;">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner" >
                    <div class="carousel-item active">
                      <img src="assets/img/quote-1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/quote-2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="assets/img/quote-3.png" class="d-block w-100" alt="...">
                    </div>
                  </div>
  
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"  style="display: none";>
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"  style="display: none";>
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    
                  </button>
                  
                </div><!-- End Quote -->


                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- New Arriv Card -->
            <div class="col-xxl-7 col-xl-20">

              <div class="card info-card customers-card" >
                <div class="card-body">
                  <img src="assets/img/new arriv.png"  alt="Customer Image" style="width: 0.8cm ; margin-top: 10px; border-radius: 10px;">
                  <img src="assets/Photo/new3.png"  alt="Customer Image" style="width: 2.6cm ; margin-top: 14px; margin-left: 30px; border-radius: 10px;">
                  <img src="assets/Photo/new2.png"  alt="Customer Image" style="width: 2.5cm ; margin-top: 14px; margin-left: 35px; border-radius: 10px;">
                  <img src="assets/Photo/book3.png"  alt="Customer Image" style="width: 2.5cm ; margin-top: 14px; margin-left: 35px; border-radius: 10px;">
                 
                  <a href = details-book.php>
                    <img src="assets/Photo/new4.png"  alt="Customer Image" style="width: 2.5cm ; margin-top: 14px; margin-left: 35px; border-radius: 10px;">
                  </a>
                  
                </div>
                
              </div>

            </div><!-- End New Arriv Card -->

          </div>

          <!-- List Book Card -->
          <div class="row">
            <h4 class="card-title" style="font-size: 26px; margin-left: 16px;" >Selamat Pagi</h4>
            <h4 class="card-title" style="font-size: 20px; margin-left: 16px;" >Rekomendasi Untuk Anda</h4>
            <div class="col-lg-2">
              <!-- Card pertama -->
              <div class="card">
                <img src="assets/Photo/book1.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Don't Make Me think</h5>
                  <p style="font-size: 12px;">Steve Krug, 2000 <br> 4.5/5
                  </p>
                </div>
              </div><!-- End Card pertama -->
            </div>
          
            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/book2.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">The Design of Every</h5>
                  <p style="font-size: 12px;">Don Norman, 1988 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/book3.png" class="card-img-top" alt="..." style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Sprint : How To Solve</h5>
                  <p style="font-size: 12px;">Jake Knapp, 2000 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/book4.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">LEAN UX</h5>
                  <p style="font-size: 12px;">Jeff G. and Josh S., 2016 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/book5.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">The Road to React</h5>
                  <p style="font-size: 12px;">Robin Wieruch., 2000 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new1.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Filosofi Teras</h5>
                  <p style="font-size: 12px;">Henry M., 2018 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

          </div>


          <!-- Baris kedua -->

          <div class="row">
            <h4 class="card-title" style="font-size: 20px; margin-left: 16px;" >Bacaan Terkini</h4>
            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new2.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Pulang Pergi</h5>
                  <p style="font-size: 12px;">Tere Liye, 2021 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>
          
            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new3.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Sepotong Hati Yang..</h5>
                  <p style="font-size: 12px;">Tere Liye, 2021 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new4.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Mariposa</h5>
                  <p style="font-size: 12px;">Luluk HF., 2018 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new5.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Dikta dan Hukum</h5>
                  <p style="font-size: 12px;">Dhia'an F., 2018 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>

            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new6.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Dilan 1990</h5>
                  <p style="font-size: 12px;">Pidi Baiq, 2014 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>
  
            <div class="col-lg-2">
              <!-- Card kedua -->
              <div class="card">
                <img src="assets/Photo/new7.png" class="card-img-top" alt="..."  style="height: 206px;">
                <div class="card-body">
                  <h5 class="card-title">Si Anak Pintar</h5>
                  <p style="font-size: 12px;">Tere Liye, 2018 <br> 4.5/5</p>
                </div>
              </div><!-- End Card kedua -->
            </div>
            
          </div>
          

        </div>
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div>
        
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>