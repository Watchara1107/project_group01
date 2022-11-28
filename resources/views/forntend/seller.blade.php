@extends('layouts.master_frontend')
@section('content')

<body>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">สินค้าขายดี</h1>
              <span class="color-text-a">ทั้งหมด</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">หน้าที่</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                 1
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
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

  </main><!-- End #main -->

</body>

@stop