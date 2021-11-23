<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ryan Restaurant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
      <!-- setup id khach hang -->
<?php require '../login/setupID.php';?>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+84 354 637 020</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Thứ Hai-Chủ Nhật: 7:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="#">Ryan</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Trang chủ</a></li>
          <li><a class="nav-link scrollto" href="#about">Giới thiệu</a></li>
          <li><a class="nav-link scrollto" target="_blank" href="../food-ordering">Thực đơn</a></li>
          <li class="dropdown"><a href="#branch"><span>Chi nhánh</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#branch">Chi nhánh 1</a></li>
              <li><a href="#branch">Chi nhánh 2</a></li>
              <li><a href="#branch">Chi nhánh 3</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
          <li><a class="nav-link scrollto" href="../login"><img src="assets/img/login_icon.png" id="login"> 
            <?php 
              if(isset($_SESSION['tenthanhvien'])){echo " ". $_SESSION['tenthanhvien'];}
             ?>
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Đặt bàn</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Nhà hàng</span> Ryan </h2>
                <p class="animate__animated animate__fadeInUp">Mục tiêu và phương châm hàng đầu của chúng tôi là luôn tạo sự hài lòng, cảm giác thoải mái, thư giãn cho khách hàng do vậy mà chúng tôi đã không ngừng đổi mới về cung cách phục vụ, cũng như về chất lượng các món ăn để đáp ứng nhu cầu ngày càng cao của Quý Khách.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Thực đơn</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Đặt bàn</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Nhà hàng Ryan</h2>
                <p class="animate__animated animate__fadeInUp">Mục tiêu và phương châm hàng đầu của chúng tôi là luôn tạo sự hài lòng, cảm giác thoải mái, thư giãn cho khách hàng do vậy mà chúng tôi đã không ngừng đổi mới về cung cách phục vụ, cũng như về chất lượng các món ăn để đáp ứng nhu cầu ngày càng cao của Quý Khách.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Thực đơn</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Đặt bàn</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Nhà hàng Ryan</h2>
                <p class="animate__animated animate__fadeInUp">Mục tiêu và phương châm hàng đầu của chúng tôi là luôn tạo sự hài lòng, cảm giác thoải mái, thư giãn cho khách hàng do vậy mà chúng tôi đã không ngừng đổi mới về cung cách phục vụ, cũng như về chất lượng các món ăn để đáp ứng nhu cầu ngày càng cao của Quý Khách.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Thực đơn</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Đặt bàn</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=dV4W-mTfahc" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Chào mừng quý khách đến với <strong>nhà hàng Ryan</strong> của chúng tôi</h3>
              <p>
                Nhà Hàng Ryan là nhà hàng sở hữu một không gian ẩm thực ấm cúng với sự kết hợp tinh tế giữa văn hóa ẩm thực Việt Nam và các nền văn hóa ẩm thực Á Đông. Đến với Nhà Hàng Ryan, khách hàng có thể thưởng thức những món ăn độc đáo, sáng tạo và mang đậm dấu ấn đặc trưng. Trong đó, ấn tượng và nổi bật nhất với thiết kể ẩm thực chủ đạo gồm những món ăn đặc sắc chế biến từ nguyên liệu truyền thống và các nguyên liệu được nhập khẩu 100%.
              </p>
              <p class="fst-italic">
                Nhà Hàng Ryan tiền thân là nhà hàng Zuan đã hoạt động trong ngành ẩm thực Việt Nam một thời gian dài đã có dấu ấn nhất định trong ngành F&B tại Bình Định. <br>
                Ngày 11/11/2021, Nhà Hàng Ryan chính thức khai trương đi vào hoạt động. Địa chỉ: 180 đường Trần Hưng Đạo Thị Trấn Ngô Mây Tỉnh Bình Định.

              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> An toàn: luôn luôn đề cao vấn đề an toàn thực phẩm ở mọi công đoạn.</li>
                <li><i class="bx bx-check-double"></i> Chất lượng: luôn không ngừng tìm tòi, học hỏi, cập nhật để hoàn thiện và nâng cao chất lượng từng món ăn.</li>
                <li><i class="bx bx-check-double"></i> Chuyên nghiệp: sở hữu một đội ngũ nhân viên giàu kinh nghiệm và đã qua đào tạo chuyên sâu.</li>
              </ul>
              <p>
                Sứ mệnh của Nhà Hàng Ryan là mang đến cho khách hàng những trải nghiệm tuyệt vời và đúng nghĩa nhất về ẩm thực. Ở đó, ẩm thực không chỉ đơn giản là ngon miệng, mà phải đảm bảo an toàn vệ sinh và dinh dưỡng.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Branch Section ======= -->
    <section id="branch" class="branch">
      <div class="container">

        <div class="section-title">
          <h2>Chi nhánh <span>Nhà Hàng Ryan</span></h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Ryan Nguyễn Văn Trỗi</h4>
              <p>Địa chỉ: 197 Nguyễn Văn Trỗi - TP.Quy Nhơn</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Ryan Đồng Khởi</h4>
              <p>Địa chỉ: Tầng B3 Vincom Center - 72 Lê Thánh Tông - TX.An Nhơn</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4>Ryan Sư Vạn Hạnh</h4>
              <p>Địa chỉ: 830 Sư Vạn Hạnh - TT.Ngô Mây</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Brand Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Đặt <span>bàn</span></h2>
          <p>Nếu bạn muốn dùng bữa tại Ryan, vui lòng điền đầy đủ thông tin dưới đây để chúng tôi có thể sắp xếp và phục vụ bạn một cách tốt nhất.</p>
        </div>

        <form action="../tableOrdering/tableOrdering.php" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="hoten" class="form-control" id="name" placeholder="Họ Tên" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="sdt" id="phone" placeholder="Số điện thoại" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Ngày (ex. YYYY-MM-DD)" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Giờ (ex. 15:00)" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# số người" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="radio"  name="chinhanh" value="Ryan Nguyễn Văn Trỗi">Ryan Nguyễn Văn Trỗi
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="radio"  name="chinhanh" value="Ryan Đồng Khởi" >Ryan Đồng Khởi
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="radio"  name="chinhanh" value="Ryan Sư Vạn Hạnh">Ryan Sư Vạn Hạnh
            </div>

          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Nội dung"></textarea>
          </div>
          <div class="text-center"><button type="submit">Gửi tin nhắn</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Một số hình ảnh từ <span>Nhà Hàng của chúng tôi</span></h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.6435-9/241564412_3022428798036859_243355430150093762_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=Um3UBYRl8cQAX9HJ_v8&tn=PYs7IHJ7MNy1DfuT&_nc_ht=scontent.fdad3-3.fna&oh=a5d8ecc58f20a2d5668283e45fe9743a&oe=61B21422" class="testimonial-img" alt="">
                <h3>Nguyễn Tấn Tùng</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Phận làm trai gõ phím bình thiên hạ. Chí anh hùng click chuột định giang sơn.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t1.6435-9/181329817_3124133171148061_633927689932308424_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_cR-WPbx1f0AX8_Kwyv&_nc_ht=scontent.fdad3-2.fna&oh=d5d7257e163b5152fe8c6a17a3b87482&oe=61B141BA" class="testimonial-img" alt="">
                <h3>Trần Quốc Cường</h3>
                <h4>Chạy bàn</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Cường Đào.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://scontent.fdad3-5.fna.fbcdn.net/v/t1.6435-9/65289054_2073965449576037_6812323786545692672_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=LyeZI62WhX0AX-_qVX1&tn=PYs7IHJ7MNy1DfuT&_nc_ht=scontent.fdad3-5.fna&oh=c7a6194f99b25728c0bac3247baf6dda&oe=61B3BB69" class="testimonial-img" alt="">
                <h3>Đặng Quang Hiệu</h3>
                <h4>Bốc vác</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ò ho
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://sieupet.com/sites/default/files/pictures/images/1-1473150685951-5.jpg" class="testimonial-img" alt="">
                <h3>Phan Thanh Hoan</h3>
                <h4>Ở đợ</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Trẻ trâu
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://scontent.fdad3-2.fna.fbcdn.net/v/t1.6435-9/204414755_3014964085455265_1662093479256598108_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=174925&_nc_ohc=L8qOo0PfOEgAX8_gWSx&tn=PYs7IHJ7MNy1DfuT&_nc_ht=scontent.fdad3-2.fna&oh=bd5f8df0340f5b64974be66abfc470a9&oe=61B10B3E" class="testimonial-img" alt="">
                <h3>Phạm Minh Chiến</h3>
                <h4>Thu ngân</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tàng hình.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://tunglocpet.com/wp-content/uploads/2020/08/ngoap-ngu-03.jpg" class="testimonial-img" alt="">
                <h3>Nguyễn Lê Anh Khoa</h3>
                <h4>Copy paste</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tàng hình 2.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://scontent.fdad3-1.fna.fbcdn.net/v/t1.6435-9/151649580_1263393124056525_983818818853476903_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=TJYf30PQI2kAX_A1iIs&_nc_ht=scontent.fdad3-1.fna&oh=4fef03cea3ea52f4d841c335d1d765d0&oe=61B2E0E4" class="testimonial-img" alt="">
                <h3>Nguyễn Kế Văn</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Manchester United
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Liên hệ</span> chúng tôi</h2>
          <p>Dù sự kiện hay lễ kỷ niệm nào của bạn, chúng tôi đều ở đây để khiến ngày đặc biệt của bạn trở thành một ngày thực sự đáng nhớ. Xin vui lòng liên hệ với chúng tôi. Các chuyên gia ẩm thực riêng của chúng tôi rất vui khi tạo ra bữa ăn theo yêu cầu.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d967.8335795882915!2d109.05964567427448!3d13.998180290095796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f3b97d5818f5f%3A0x371c63bb8e47d55d!2zQ-G7rWEgSMOgbmcgxJDhu5MgVGjhu50gVHLGsOG7nW5nIEzhu5lj!5e0!3m2!1sen!2s!4v1636626552422!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>180 Trần Hưng Đạo<br>Phù Cát, Bình Định</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Giờ mở cửa:</h4>
              <p>Thứ Hai-Chủ Nhật:<br>7:00 AM - 23:00 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>nhokute.1303@gmail.com<br>van00972756@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Gọi:</h4>
              <p>+84 354 637 020<br>+84 339 331 739</p>
            </div>
          </div>
        </div>

        <form action="" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Họ Tên" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Nội dung" required></textarea>
          </div>
          <div class="text-center"><button type="submit">Gửi tin nhắn</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Ryan</h3>
      <p>Hãy đến với nhà hàng của chúng tôi, bạn sẽ có những phút giây tuyệt vời.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Ryan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.facebook.com/charlesdephys">Zuan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>