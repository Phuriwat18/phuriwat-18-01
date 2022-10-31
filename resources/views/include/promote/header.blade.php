
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="{{ asset('template/promote/assets/img/su.jpg') }}" alt="su.jpg" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">หน้าเเรก</a></li>
          <li><a class="nav-link scrollto" href="#speakers">เมนูใหม่ทางร้าน</a></li>
          <li><a class="nav-link scrollto" href="#schedule">เมนนูอาหาร</a></li>
          <li><a class="nav-link scrollto" href="#hotels">รีวิวอาหาร</a></li>
          <li><a class="nav-link scrollto" href="#supporters">เกี่ยวกับ</a></li>
          <li><a class="nav-link scrollto" href="#contact">ที่อยู่ติดต่อ</a></li>
          <li><a class="nav-link scrollto" href="#gallery">ผู้จัดทำ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if (Route::has('login'))
      @auth
      <a class="buy-tickets scrollto" href="{{ route('admin') }}">admin</a>
      @else


      <a class="buy-tickets scrollto" href="{{ route('login') }}">เข้าส่ระบบ</a>
      @endif
      @endauth

    </div>
  </header><!-- End Header -->

