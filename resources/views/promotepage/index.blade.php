@extends('layouts.promote')
@section('content')


  
 
  
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="mb-4 pb-0">ร้าน ชูชิวังหลัง<br><span>วังหลัง</span></h1>
        <p class="mb-4 pb-0">19/117 ลเลียงเมืองนนทบุรี เเขวงใตลาดขวัญ อ.เมือง จ.นนทบุรี</p>
        <a href="https://youtu.be/AM5eLHfaJRU" class="glightbox play-btn mb-4"></a>
        <a href="#about" class="about-btn scrollto">เวลาเปิดร้าน</a>
      </div>
    </section><!-- End Hero Section -->
  
    <main id="main">
  
      <!-- ======= About Section ======= -->
      <section id="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-4">
              <h2>เวลาเปิดร้าน</h2>
              <p><h3>เปิดตั้งเเต่ 09.00น.-22.00น.</h3></p>
            </div>
            <div class="col-lg-4">
              <h2>เวลาเปิดร้าน</h2>
              <p><h3>หยุดทุกวันอาทิตย์</h3></p>
            </div>
            <div class="col-lg-4">
              <h2>เวลาเปิดร้าน</h2>
              <h3>เปิดทุกวันจันทร์-เสาร์</h3>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->
  
      <!-- ======= Speakers Section ======= -->
      <section id="speakers">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>เมนูใหม่ทางร้าน</h2>
           
          </div>
     
          <div class="container">
              <div class="row mt-4">
          
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('template/promote/assets/img/hotels/low3.jpg') }}" alt="Speaker 1" class="img-fluid">
                <div class="details">
                  <h3><a href="speaker-details.html">ชูชิหน้าปลาไหล</a></h3>
                  <p>เมนูยอดฮิต</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                  
                  <h5 class="card-title">เมนูใหม่</h5>
                  <h2 class="card-text">
                    ชูชิหน้าข้าวปลาไหลย่างซีอิ้ว ปลาไหลชิ้นใหญ่พิเศษเนื้อเเน่นเต็มคำ
                  ราดด้วยซอสสูตรพิเศษหวานลึกชุ่มช้ำ</h2>
                  <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                </div>
                </div>
              </div>
              
          <div class="container">
            <div class="row mt-4">
              <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                  <h5 class="card-title">เมนูใหม่</h5>
                  <h2 class="card-text">
                    รับประกันความสดใหม่ แล่กันสดๆ เนื้อชิ้นหนาอ้วนเต็มคำมา</h2>
                  <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                </div>
                </div>
              </div>
  
              
                <div class="col-lg-6 col-md-6">
                  <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('template/promote/assets/img/hotels/low2.jpg') }}" alt="Speaker 1" class="img-fluid">
                    <div class="details">
                      <h3><a href="speaker-details.html">ชูชิหน้าปลาไหล</a></h3>
                      <p>เมนูยอดฮิต</p>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
  
                
                
                
  
      </section><!-- End Speakers Section -->
  
      <!-- ======= Schedule Section ======= -->
      <section id="schedule" class="section-with-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>เมนูทางร้าน</h2>
            <p>Food Manus</p>
          </div>
  
          <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">ประเภทอาหาร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">ปรเภทอาหาร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">ประเภทอาหาร</a>
            </li>
          </ul>
        
        <div class="container">
          <div class="row mt-4">

            @foreach ($products as $product)
            <div class="col-3 mb-3 mt-3">
              <div class="card" style="width: 18rem;">
                @if( !empty($product->image) )
                <div class="container d-flex justify-content-center">
                  <img src="{{ asset('products') . '/' . $product->image }}" class="card-img-top" alt="#" style="width: 100%; height: 100%;" />
                </div>
                @else
                <svg width="401" height="82" viewBox="0 0 401 82" xmlns="http://www.w3.org/2000/svg"><g id="svgGroup" stroke-linecap="round" fill-rule="nonzero" font-size="9pt" stroke="#000" stroke-width="0.25mm" fill="#000" style="stroke:#000;stroke-width:0.25mm;fill:#000"><path d="M 8.2 64.4 L 0 64.4 L 0 0 L 7.4 0 L 44.1 51.8 L 44.1 0 L 52.3 0 L 52.3 64.4 L 44.8 64.4 L 8.2 12.7 L 8.2 64.4 Z" id="0" vector-effect="non-scaling-stroke"/><path d="M 69.95 59.05 Q 64.3 52.7 64.3 40.7 A 39.884 39.884 0 0 1 64.885 33.641 Q 65.583 29.765 67.114 26.693 A 19.482 19.482 0 0 1 70 22.4 Q 75.7 16 88 16 A 37.381 37.381 0 0 1 94.641 16.549 Q 98.248 17.202 101.056 18.629 A 16.637 16.637 0 0 1 106 22.4 Q 111.7 28.8 111.7 40.7 Q 111.7 52.7 106.1 59.05 A 16.953 16.953 0 0 1 99.058 63.711 Q 94.447 65.4 88 65.4 Q 80.214 65.4 75.09 62.897 A 16.455 16.455 0 0 1 69.95 59.05 Z M 88 58.4 A 26.657 26.657 0 0 0 92.275 58.082 Q 94.461 57.726 96.178 56.971 A 10.144 10.144 0 0 0 100 54.15 A 12.879 12.879 0 0 0 102.133 50.266 Q 103.412 46.696 103.494 41.433 A 46.814 46.814 0 0 0 103.5 40.7 A 37.834 37.834 0 0 0 103.219 35.917 Q 102.553 30.71 100.309 27.705 A 10.637 10.637 0 0 0 99.95 27.25 A 10.567 10.567 0 0 0 95.556 24.199 Q 93.768 23.506 91.522 23.213 A 27.317 27.317 0 0 0 88 23 A 26.078 26.078 0 0 0 83.714 23.327 Q 78.615 24.179 76.05 27.25 A 12.828 12.828 0 0 0 73.887 31.134 Q 72.588 34.708 72.506 39.978 A 46.176 46.176 0 0 0 72.5 40.7 A 38.368 38.368 0 0 0 72.777 45.483 Q 73.43 50.664 75.624 53.666 A 10.632 10.632 0 0 0 76 54.15 Q 78.675 57.398 84.269 58.164 A 27.567 27.567 0 0 0 88 58.4 Z" id="1" vector-effect="non-scaling-stroke"/><path d="M 154.9 64.4 L 146.7 64.4 L 146.7 0 L 154.9 0 L 154.9 64.4 Z" id="3" vector-effect="non-scaling-stroke"/><path d="M 177 64.4 L 168.9 64.4 L 168.9 17 L 176.3 17 L 176.8 22.4 A 32.512 32.512 0 0 1 184.321 17.918 A 30.541 30.541 0 0 1 184.85 17.7 A 24.143 24.143 0 0 1 193.087 16.015 A 27.737 27.737 0 0 1 194 16 A 26.748 26.748 0 0 1 197.083 16.166 Q 198.628 16.346 199.904 16.72 A 10.742 10.742 0 0 1 202.25 17.7 Q 205.2 19.4 206.6 22.5 A 30.474 30.474 0 0 1 212.785 18.577 A 34.941 34.941 0 0 1 214.4 17.85 Q 218.508 16.123 224.097 16.008 A 39.127 39.127 0 0 1 224.9 16 A 25.208 25.208 0 0 1 229.344 16.366 Q 234.173 17.232 236.95 20.15 A 12.792 12.792 0 0 1 239.702 24.777 Q 240.404 26.761 240.695 29.209 A 31.348 31.348 0 0 1 240.9 32.9 L 240.9 64.4 L 232.8 64.4 L 232.8 33.7 A 23.446 23.446 0 0 0 232.624 30.711 Q 232.117 26.781 230.15 25 A 7.873 7.873 0 0 0 227.584 23.491 Q 225.345 22.656 222.045 22.603 A 28.108 28.108 0 0 0 221.6 22.6 Q 217.7 22.6 214.15 23.9 Q 210.6 25.2 208.1 27.9 A 20.475 20.475 0 0 1 208.531 30.42 Q 208.7 31.947 208.7 33.7 L 208.7 64.4 L 201 64.4 L 201 33.9 A 28.645 28.645 0 0 0 200.859 30.949 Q 200.469 27.196 199 25.25 A 5.51 5.51 0 0 0 196.842 23.584 Q 194.695 22.6 191.1 22.6 Q 187.1 22.6 183.45 24.35 Q 179.8 26.1 177 28.7 L 177 64.4 Z" id="4" vector-effect="non-scaling-stroke"/><path d="M 269.2 36.3 L 285.7 36.3 L 285.7 33.4 A 23.572 23.572 0 0 0 285.587 31.013 Q 285.468 29.844 285.222 28.866 A 9.697 9.697 0 0 0 284.65 27.2 A 5.737 5.737 0 0 0 282.295 24.63 A 8.509 8.509 0 0 0 280.7 23.9 Q 278.083 22.998 273.268 22.91 A 58.395 58.395 0 0 0 272.2 22.9 Q 267.9 22.9 263.9 23.6 A 51.129 51.129 0 0 0 258.238 24.914 A 44.56 44.56 0 0 0 256.4 25.5 L 256.4 18.7 A 33.72 33.72 0 0 1 259.42 17.736 Q 261.503 17.172 263.95 16.75 A 51.632 51.632 0 0 1 269.939 16.089 A 62.366 62.366 0 0 1 273.3 16 A 39.727 39.727 0 0 1 278.852 16.361 Q 284.899 17.217 288.45 20.1 Q 292.686 23.539 293.369 30.568 A 29.324 29.324 0 0 1 293.5 33.4 L 293.5 64.4 L 286.6 64.4 L 286 59 Q 282.9 62.2 278.5 63.8 Q 274.935 65.096 269.99 65.342 A 48.142 48.142 0 0 1 267.6 65.4 Q 263.1 65.4 259.3 63.8 A 14.524 14.524 0 0 1 254.528 60.614 A 13.914 13.914 0 0 1 253.2 59.05 A 11.608 11.608 0 0 1 251.251 54.598 A 16.542 16.542 0 0 1 250.9 51.1 A 16.028 16.028 0 0 1 251.716 45.884 A 13.57 13.57 0 0 1 255.2 40.45 Q 259.42 36.377 268.841 36.301 A 44.649 44.649 0 0 1 269.2 36.3 Z M 285.7 51.8 L 285.7 42.6 L 269.4 42.6 Q 264.446 42.6 261.996 44.243 A 5.871 5.871 0 0 0 261.4 44.7 Q 259 46.8 259 51.1 A 9.887 9.887 0 0 0 259.229 53.309 Q 259.549 54.701 260.313 55.687 A 5.295 5.295 0 0 0 261.9 57.05 A 11.176 11.176 0 0 0 264.586 58.118 Q 265.895 58.464 267.452 58.604 A 25.079 25.079 0 0 0 269.7 58.7 A 24.861 24.861 0 0 0 274.564 58.245 A 19.254 19.254 0 0 0 278.9 56.85 Q 282.9 55 285.7 51.8 Z" id="5" vector-effect="non-scaling-stroke"/><path d="M 306.4 79.5 L 306.4 72.7 Q 310.4 74 315.4 74.7 A 71.79 71.79 0 0 0 322.638 75.355 A 62.519 62.519 0 0 0 325 75.4 A 101.548 101.548 0 0 0 328.5 75.344 Q 333.375 75.175 336 74.5 A 5.449 5.449 0 0 0 337.692 73.772 Q 339.103 72.826 339.413 70.999 A 6.571 6.571 0 0 0 339.5 69.9 A 5.712 5.712 0 0 0 339.337 68.488 A 3.583 3.583 0 0 0 337.65 66.2 A 5.627 5.627 0 0 0 336.384 65.668 Q 335.006 65.257 332.858 65.144 A 33.327 33.327 0 0 0 331.1 65.1 L 318.5 65.1 A 28.854 28.854 0 0 1 313.883 64.764 Q 305.4 63.381 305.4 56.3 A 9.22 9.22 0 0 1 306.621 51.753 A 11.721 11.721 0 0 1 307.25 50.75 A 9.067 9.067 0 0 1 310.571 47.889 A 12.604 12.604 0 0 1 312.8 47 A 14.449 14.449 0 0 1 309.279 44.569 A 12.249 12.249 0 0 1 306.9 41.45 A 15.657 15.657 0 0 1 305.32 36.792 A 21.481 21.481 0 0 1 305 33 A 24.222 24.222 0 0 1 305.454 28.143 Q 306.529 22.898 310.15 20.05 Q 315.201 16.078 325.496 16.001 A 54.67 54.67 0 0 1 325.9 16 A 30.219 30.219 0 0 1 329.574 16.231 A 34.028 34.028 0 0 1 330.45 16.35 Q 332.387 16.638 333.611 16.893 A 23.134 23.134 0 0 1 334.1 17 L 351.2 17 L 350.9 22.6 L 342.3 22.6 A 10.909 10.909 0 0 1 345.177 26.178 A 10.619 10.619 0 0 1 345.6 27.15 A 15.565 15.565 0 0 1 346.512 31.148 A 19.025 19.025 0 0 1 346.6 33 A 21.744 21.744 0 0 1 346.056 38.012 Q 345.1 42.053 342.46 44.795 A 13.827 13.827 0 0 1 342 45.25 A 14.179 14.179 0 0 1 336.931 48.262 Q 334.757 49.035 332.078 49.362 A 34.594 34.594 0 0 1 327.9 49.6 Q 326.3 49.6 325.05 49.45 Q 324.191 49.347 323.119 49.22 A 1766.773 1766.773 0 0 0 322.1 49.1 Q 319 49.2 316.3 50.85 A 7.069 7.069 0 0 0 314.935 51.913 A 4.401 4.401 0 0 0 313.6 55.1 A 3.359 3.359 0 0 0 313.752 56.141 A 2.591 2.591 0 0 0 314.95 57.6 Q 315.978 58.209 318.311 58.355 A 25.682 25.682 0 0 0 319.9 58.4 L 333 58.4 A 28.407 28.407 0 0 1 337.115 58.678 Q 341.288 59.291 343.9 61.25 A 9.25 9.25 0 0 1 347.555 67.553 A 13.894 13.894 0 0 1 347.7 69.6 A 13.008 13.008 0 0 1 347.163 73.461 Q 345.936 77.421 341.9 79.3 Q 336.345 81.886 326.296 81.995 A 82.371 82.371 0 0 1 325.4 82 Q 320.1 82 315.05 81.4 Q 310 80.8 306.4 79.5 Z M 325.9 43.4 A 34.478 34.478 0 0 0 329.175 43.256 Q 333.675 42.825 335.7 41.1 A 6.611 6.611 0 0 0 337.498 38.536 Q 338.344 36.49 338.396 33.415 A 24.114 24.114 0 0 0 338.4 33 A 18.686 18.686 0 0 0 338.175 29.991 Q 337.914 28.395 337.35 27.138 A 7.581 7.581 0 0 0 335.55 24.6 Q 332.95 22.228 327.061 22.02 A 32.935 32.935 0 0 0 325.9 22 Q 319.787 22 316.754 24.081 A 7.441 7.441 0 0 0 316.2 24.5 A 7.398 7.398 0 0 0 314.072 27.548 Q 313.581 28.796 313.367 30.365 A 19.496 19.496 0 0 0 313.2 33 Q 313.2 36.384 314.279 38.614 A 7.133 7.133 0 0 0 316.05 40.95 A 8.054 8.054 0 0 0 318.466 42.332 Q 320.778 43.21 324.31 43.366 A 35.977 35.977 0 0 0 325.9 43.4 Z" id="6" vector-effect="non-scaling-stroke"/><path d="M 401 35.6 L 401 44.5 L 365.9 44.5 A 27.834 27.834 0 0 0 366.344 47.869 Q 366.678 49.549 367.217 50.926 A 12.304 12.304 0 0 0 368.25 53 Q 370.2 56.1 374.15 57.45 A 21.394 21.394 0 0 0 377.318 58.246 Q 380.436 58.8 384.6 58.8 A 37.203 37.203 0 0 0 393.256 57.823 A 32.176 32.176 0 0 0 398 56.3 L 398 62.7 A 30.555 30.555 0 0 1 393.943 64.062 A 38.49 38.49 0 0 1 391.05 64.7 A 44.334 44.334 0 0 1 384.045 65.389 A 49.625 49.625 0 0 1 383 65.4 A 42.268 42.268 0 0 1 376.023 64.862 Q 372.227 64.226 369.221 62.835 A 18.742 18.742 0 0 1 364 59.3 Q 357.7 53.2 357.7 40.5 Q 357.7 29.1 363.15 22.55 Q 367.867 16.881 377.34 16.119 A 38.153 38.153 0 0 1 380.4 16 A 31.618 31.618 0 0 1 385.305 16.359 Q 389.106 16.956 391.95 18.55 Q 396.5 21.1 398.75 25.55 Q 401 30 401 35.6 Z M 365.9 38.6 L 393.7 38.6 L 393.7 34.7 Q 393.7 30.3 391.945 27.426 A 9.565 9.565 0 0 0 390.65 25.75 Q 387.6 22.6 380.6 22.6 Q 372.973 22.6 369.694 25.821 A 7.72 7.72 0 0 0 369 26.6 A 12.718 12.718 0 0 0 367.051 30.335 Q 366.442 32.129 366.155 34.34 A 33.197 33.197 0 0 0 365.9 38.6 Z" id="7" vector-effect="non-scaling-stroke"/></g></svg>
                @endif
                <div class="card-body">
                  <p>Price : {{ $product->price }}</p>
                </div>
              </div>
            </div>
            @endforeach
      
          </div>
        </div>
  
      </section><!-- End Schedule Section -->
  

  
      <!-- ======= Hotels Section ======= -->
      <section id="hotels" class="section-with-bg">
  
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>รีวิวอาหาร</h2>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
  
            @foreach ($content as $row)
            <div class="col-lg-6 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img src="{{ asset('contents').'/'.$row->image }}" alt="Hotel 1" class="img-fluid">
                </div>
                <h3><a href="#">{{ $row->name }}</a></h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div Mile from the Venuediv>
                
              </div>
            </div>
            @endforeach
  
            
          </div>
        </div>
  
      </section><!-- End Hotels Section -->
  
      
  
  
      <!-- ======= Supporters Section ======= -->
      <section id="supporters" class="section-with-bg">
  
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>เกี่ยวกับ</h2>
          </div>
          <div class="clearfix">
           
            <img src="{{ asset('template/promote/assets/img/supporters/kk.jpg') }}" class="rounded float-end" alt="...">
          
            <h2 class="card-text">
           ชื่อคุณ พณิชา วันเเจ้ง
  อายุ 35
  ตำเเหน่งเจ้าของร้าน
  ร้าน ชูชิ วังหลัง</h2>
          </div>
  
      </section><!-- End Sponsors Section -->
  

  
     
  
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="section-bg">
  
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>ที่อยู่ติดต่อ</h2>
            <p></p>
          </div>
  
          <div class="row contact-info">
  
            <div class="col-md-6">
              <div class="contact-address">
                <i class="bi bi-geo-alt"></i>
                <h3>ที่อยู่</h3>
                <address>VF5V+C73 ถนน เลี่ยงเมืองนนทบุรี ตำบล ตลาดขวัญ อำเภอเมืองนนทบุรี นนทบุรี 11000</address>
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="contact-phone">
                <i class="bi bi-phone"></i>
                <h3>เบอร์โทร</h3>
                <p><a href="tel:+155895548855">098 273 2418</a></p>
              </div>
            </div>
  
          </div>
  
          
  
        </div>
      </section><!-- End Contact Section -->
  
      <section id="gallery">
        
        <div class="row" data-aos="fade-up">
          <div class="section-header">
            <h2>ผู้จัดทำ</h2>
          </div>
        </div>
        {{-- <div class="col-md-6 pb-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/phu/phu.png') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <h5 class="card-title">นายภูวเดช อินทร์รุ่ง</h5>
            <p class="card-text">สาขาวิชา:เทคโนโลยีสารสนเทศ</p>
            <p class="card-text">ระดับชั้น:ปวช.3/4</p>
            <p class="card-text">เลขที่:4</p>
          </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/phu/min.png') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <h5 class="card-title">นายภูวเดช อินทร์รุ่ง</h5>
            <p class="card-text">สาขาวิชา:เทคโนโลยีสารสนเทศ</p>
            <p class="card-text">ระดับชั้น:ปวช.3/4</p>
            <p class="card-text">เลขที่:4</p>
          </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/phu/bell.png') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <h5 class="card-title">นายสราวุธ เอี่ยมมาลา</h5>
            <p class="card-text">สาขาวิชา:เทคโนโลยีสารสนเทศ</p>
            <p class="card-text">ระดับชั้น:ปวช.3/4</p>
            <p class="card-text">เลขที่:17</p>
          </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/phu/phuu.png') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <h5 class="card-title">นายภูริวัฒน์ มีศรี</h5>
            <p class="card-text">สาขาวิชา:เทคโนโลยีสารสนเทศ</p>
            <p class="card-text">ระดับชั้น:ปวช.3/4</p>
            <p class="card-text">เลขที่:18</p>
          </div>
          </div>
        </div> --}}
        <div class="row">
          <div class="col-md-3">
              <div class="card mb-3 product-wap rounded-0" style="width: 18rem;">
                  <div class="card rounded-0">
                      <img class="card-img rounded-0 img-fluid" src="{{ asset('template/promote/assets/img/phu/phu.png') }}">
                      <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                          <ul class="list-unstyled">
                              <li><a><i class="fas fa-cart-plus"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body">
                      <a  class="h4 text-decoration-none">นายภูวเดช อินทร์รุ่ง</a>
                      <a><h5>สาขาวิชา:เทคโนโลยีสารสนเทศ</h5></a>
                      <a><h5>ระดับชั้น:ปวช.3/4</h5></a>
                      <a><h5>เลขที่:4</h5></a>
                      <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                          
                  </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3 product-wap rounded-0" style="width: 18rem;">
                <div class="card rounded-0">
                    <img class="card-img rounded-0 img-fluid" src="{{ asset('template/promote/assets/img/phu/min.png') }}">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul class="list-unstyled">
                            <li><a><i class="fas fa-cart-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                  <a  class="h4 text-decoration-none">นางสาวณัฏฐณิชา	ตะกุดแจ่ม</a>
                  <a><h5>สาขาวิชา:เทคโนโลยีสารสนเทศ</h5></a>
                  <a><h5>ระดับชั้น:ปวช.3/4</h5></a>
                  <a><h5>เลขที่:6</h5></a>
                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                        
                </div>
            </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-3 product-wap rounded-0" style="width: 18rem;">
              <div class="card rounded-0">
                  <img class="card-img rounded-0 img-fluid" src="{{ asset('template/promote/assets/img/phu/bell.png') }}">
                  <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                      <ul class="list-unstyled">
                          <li><a><i class="fas fa-cart-plus"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-body">
                <a  class="h4 text-decoration-none">นายสราวุธ เอี่ยมมาลา</a>
                <a><h5>สาขาวิชา:เทคโนโลยีสารสนเทศ</h5></a>
                <a><h5>ระดับชั้น:ปวช.3/4</h5></a>
                <a><h5>เลขที่:17</h5></a>
                  <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                      
              </div>
          </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 product-wap rounded-0" style="width: 18rem;">
            <div class="card rounded-0">
                <img class="card-img rounded-0 img-fluid" src="{{ asset('template/promote/assets/img/phu/phuu.png') }}">
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a><i class="fas fa-cart-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
              <a  class="h4 text-decoration-none">นายภูริวัฒน์ มีศรี</a>
              <a><h5>สาขาวิชา:เทคโนโลยีสารสนเทศ</h5></a>
              <a><h5>ระดับชั้น:ปวช.3/4</h5></a>
              <a><h5>เลขที่:18</h5></a>
                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                    
            </div>
        </div>
    </div>
        
      </section><!-- End Gallery Section -->

      
  
    </main><!-- End #main -->
  
  
  </body>
  
  </html>

@endsection