@extends('layouts.master_frontend')
@section('content')
    <body>
        <!-- ======= Intro Section ======= -->
        <div class="intro intro-carousel swiper position-relative">

            <div class="swiper-wrapper">

                <div class="swiper-slide carousel-item-a intro-item bg-image"
                    style="background-image: url({{ asset('frontend/assets/img/slide-1.jpg') }})">
                    <div class="overlay overlay-a"></div>
                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="intro-body">

                                            <h1 class="intro-title mb-4 ">
                                                <span class="color-b">ยินดีต้อนรับ สู่</span> <br>
                                                สวนนานาพันธุ์
                                            </h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-pagination"></div>
        </div><!-- End Intro Section -->

        <main id="main">

            <!-- ======= Latest News Section ======= -->
            <section class="section-news section-t8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-wrap d-flex justify-content-between">
                                <div class="title-box">
                                    <h2 class="title-a">สินค้าขายดี</h2>
                                </div>
                                <div class="title-link">
                                    <a href="/seller">สินค้าขายดี ทั้งหมด
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="news-carousel" class="swiper">
                        <div class="swiper-wrapper">

                            <section class="news-grid grid">
                                <div class="container">
                                  <div class="row">
                                    
                             @foreach ($seller as $sel)
                             <div class="col-md-4">
                              <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                  <img src="{{ asset('backend/upload/seller/'.$sel->image) }}"class="img-b img-fluid" alt="">
                                </div>
                                <div class="card-overlay">
                                  <div class="card-header-b">
                                    <div class="card-category-b">
                                      <a href="#" class="category-b">ขายดี</a>
                                    </div>
                                    <div class="card-title-b">
                                      <h2 class="title-2">
                                        <a href="blog-single.php">{{ $sel->nameth }}
                                          <br>{{ $sel->nameen }}</a>
                                      </h2>
                                    </div>
                                    <div class="card-date">
                                      <span class="date-b">{{ $sel->price }} บาท</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- End carousel item -->
                             @endforeach
                                    
                          
                          
                                  </div>
                                  
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <nav class="pagination-a">
                                        <ul class="pagination justify-content-end">
                                          <li class="page-item disabled">
                                            
                                          </li>
                                          <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                          </li>
                                          
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    </div>
                                  </div>
                                </div>
                              </section><!-- End Blog Grid-->
                        </div>
                    </div>

                </div>
            </section><!-- End Latest News Section -->

            <!-- ======= Latest Properties Section ======= -->
            <section class="section-property section-t8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-wrap d-flex justify-content-between">
                                <div class="title-box">
                                    <h2 class="title-a">สินค้า</h2>
                                </div>
                                <div class="title-link">
                                    <a href="{{ url('/product') }}">สินค้า ทั้งหมด
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="property-carousel" class="swiper">
                        <div class="swiper-wrapper">

                            <section class="news-grid grid">
                                <div class="container">
                                  <div class="row">
                                    
                             @foreach ($product as $pro)
                             <div class="col-md-4">
                              <div class="card-box-b card-shadow news-box">
                                <div class="img-box-b">
                                  <img src="{{ asset('backend/upload/product/'.$pro->image) }}"class="img-b img-fluid" alt="">
                                </div>
                                <div class="card-overlay">
                                  <div class="card-header-b">
                                    <div class="card-title-b">
                                      <h2 class="title-2">
                                        <a href="blog-single.php">{{ $pro->nameth }}
                                          <br>{{ $pro->nameen }}</a>
                                      </h2>
                                    </div>
                                    <div class="card-date">
                                      <span class="date-b">{{ $pro->price }} บาท</span>
                                    </div>
                                  </div>
                                </div>
                
                              </div>
                            </div><!-- End carousel item -->
                             @endforeach
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <nav class="pagination-a">
                                        <ul class="pagination justify-content-end">
                                          <li class="page-item disabled">
                                            
                                          </li>
                                          <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                          </li>
                                          
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    </div>
                                  </div>
                                </div>
                              </section><!-- End Blog Grid-->



                        </div>
                    </div>
                    <div class="propery-carousel-pagination carousel-pagination"></div>

                </div>
            </section><!-- End Latest Properties Section -->

            <!-- ======= Agents Section ======= -->
            <section class="section-agents section-t8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-wrap d-flex justify-content-between">
                                <div class="title-box">
                                    <h2 class="title-a">ผู้จัดทำ โปรเจค</h2>
                                </div>
                                <div class="title-link">
                                    {{-- <a href="agents-grid.php">All Agents
                  <span class="bi bi-chevron-right"></span>
                </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-box-d">
                                <div class="card-img-d">
                                    <img src="{{ asset('frontend/assets/img/กิ๊ก.jpg') }}" alt=""
                                        class="img-d img-fluid">
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-box-d">
                                <div class="card-img-d">
                                    <img src="{{ asset('frontend/assets/img/พีค.jpg') }}" alt=""
                                        class="img-d img-fluid">
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-box-d">
                                <div class="card-img-d">
                                    <img src="{{ asset('frontend/assets/img/แบงค์.jpg') }}" alt=""
                                        class="img-d img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Agents Section -->



            <!-- ======= Testimonials Section ======= -->
            <section class="section-testimonials section-t8 nav-arrow-a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-wrap d-flex justify-content-between">
                                <div class="title-box">
                                    <h2 class="title-a">Testimonials</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="testimonial-carousel" class="swiper">
                        <div class="swiper-wrapper">

                            <div class="carousel-item-a swiper-slide">
                                <div class="testimonials-box">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-img">
                                                <img src="{{ asset('frontend/assets/img/ต้นไม้ตกแต่ง.jpg') }}"
                                                    alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-ico">
                                                <i class="bi bi-chat-quote-fill"></i>
                                            </div>
                                            <div class="testimonials-content">
                                                <p class="testimonial-text">
                                                    วันนี้เราก็มีคำแนะนำดีๆ มาฝากเกี่ยวกับการเปิดร้านขายต้นไม้
                                                    ว่าด้วยเรื่องของรูปแบบ การดำเนินการเปิดร้านขายต้นไม้ให้เป็นรูปเป็นร่าง
                                                    รวมทั้งแหล่งขายต้นไม้ที่สำคัญสำหรับผู้ที่ต้องการรับเขามาขายต่ออีกที
                                                    รวมไปถึงแนวคิดดีๆ มานำเสนอ เพื่อให้การประกอบอาชีพประสบผลสำเร็จ

                                                    อันดับแรกเราอาจต้องลองสำรวจตัวเองก่อนว่าในการจะเปิดร้านขายต้นไม้นั้น
                                                    จะต้องการต้นไม้มาไว้ในร้านด้วยวิธีไหน หลักๆ เลยก็มีอยู่ 2 วิธีด้วยกัน
                                                    ได้แก่ เพาะเองกับรับต้นไม้จากที่อื่นมาขายต่ออีกที
                                                    ซึ่งก็มีข้อดีข้อเสียแตกต่างกันออกไป
                                                </p>
                                            </div>
                                            <div class="testimonial-author-box">
                                                <img src="{{ asset('frontend/assets/img/กิ๊ก.jpg') }}"
                                                    alt="" class="testimonial-avatar">
                                                <h5 class="testimonial-author">Albert & Erika</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End carousel item -->

                            <div class="carousel-item-a swiper-slide">
                                <div class="testimonials-box">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-img">
                                                <img src="{{ asset('frontend/assets/img/มา.jpg') }}"
                                                    alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-ico">
                                                <i class="bi bi-chat-quote-fill"></i>
                                            </div>
                                            <div class="testimonials-content">
                                                <p class="testimonial-text">
                                                    ปัจจุบันการตกแต่งสถานที่ถือเป็นเรื่องสำคัญ
                                                    และจำเป็นในหลายภาคส่วนไม่ว่าจะเป็นที่พักอาศัยต่าง หรือองค์กรสำนักงาน
                                                    ล้วนต้องมีการตกแต่งสถานที่ด้วยกันทั้งนั้น
                                                    และการจัดสวนก็เป็นหนึ่งองค์ประกอบสำคัญในการตกแต่งสถานที่ดังกล่าว
                                                    โดยจะเน้นในส่วนของการตกแต่งภายนอกหรือกลางแจ้งบริเวณที่โล่งกว้าง
                                                    หรือสวนหย่อมขนาดเล็กก็อาจมีบ้างแล้วแต่ขนาดพื้นที่ของสถานที่นั้นๆ
                                                    ซึ่งองค์ประกอบหลักของการจัดสวนก็คือต้นไม้
                                                    ทำให้ต้นไม้คือสินค้าหลักที่เราจะมาพูดถึงในครั้งนี้ ภายใต้คำสำคัญที่ว่า
                                                    “เปิดร้านขายต้นไม้” นั่นเอง
                                                </p>
                                            </div>
                                            <div class="testimonial-author-box">
                                                <img src="{{ asset('frontend/assets/img/แบงค์.jpg') }}"
                                                    alt="" class="testimonial-avatar">
                                                <h5 class="testimonial-author">Pablo & Emma</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End carousel item -->

                        </div>
                    </div>
                    <div class="testimonial-carousel-pagination carousel-pagination"></div>

                </div>
            </section><!-- End Testimonials Section -->

        </main><!-- End #main -->

    </body>

@stop
