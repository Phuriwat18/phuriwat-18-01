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
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/1.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <br>
          </div>
        </div>
        </div>
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/2.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <br>
          </div>
        </div>
        </div>
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/3.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <br>
          </div>
        </div>
        </div>
        
       
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/4.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <br>
          </div>
        </div>
        </div>
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/5.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <br>
          </div>
        </div>
        </div>
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/6.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <br>
          </div>
        </div>
        </div>
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/7.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
        
       
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/8.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/9.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
      
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/10.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
      
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/11.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
      
     
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/12.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
      
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/13.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
    
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/14.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
    
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/15.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
    
   
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/16.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
      
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/17.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/18.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/19.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/20.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/21.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/22.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/23.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/24.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/25.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/26.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
  
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/27.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
        <br>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/28.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
        <br>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/29.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
        <br>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/gg/30.jpg') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            
          </div>
        </div>
        </div>
        
  
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
  
            <div class="col-lg-6 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img src="{{ asset('template/promote/assets/img/hotels/low2.jpg') }}" alt="Hotel 1" class="img-fluid">
                </div>
                <h3><a href="#">ชูชิหน้าปลาเเซลมอน</a></h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div Mile from the Venuediv>
                <p>5.0</p>
              </div>
            </div>
  
            <div class="col-lg-6 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img src="{{ asset('template/promote/assets/img/hotels/low3.jpg') }}" alt="Hotel 2" class="img-fluid">
                </div>
                <h3><a href="#">ชูชิหน้าปลาไหล</a></h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill-half-full"></i>
                </div>              
              </div>
            </div>
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
  
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>ผู้จัดทำ</h2>
          </div>
        </div>
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
          <img src="{{ asset('template/promote/assets/img/phu/phuu.png') }}" class="card-img-top" alt="ภาพพื้นหลังเท่ๆ">
          <div class="card-body">
            <h5 class="card-title">นายภูริวัฒน์ มีศรี</h5>
            <p class="card-text">สาขาวิชา:เทคโนโลยีสารสนเทศ</p>
            <p class="card-text">ระดับชั้น:ปวช.3/4</p>
            <p class="card-text">เลขที่:18</p>
          </div>
          </div>
        </div>
        
      </section><!-- End Gallery Section -->

      
  
    </main><!-- End #main -->
  
  
  </body>
  
  </html>

@stop