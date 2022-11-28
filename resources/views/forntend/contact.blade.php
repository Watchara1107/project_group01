@extends('layouts.master_frontend')
@section('content')

<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Keyword</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select class="form-control form-select form-control-a" id="Type">
                  <option>All Type</option>
                  <option>For Rent</option>
                  <option>For Sale</option>
                  <option>Open House</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">City</label>
                <select class="form-control form-select form-control-a" id="city">
                  <option>All City</option>
                  <option>Alabama</option>
                  <option>Arizona</option>
                  <option>California</option>
                  <option>Colorado</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Bedrooms</label>
                <select class="form-control form-select form-control-a" id="bedrooms">
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="garages">Garages</label>
                <select class="form-control form-select form-control-a" id="garages">
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Bathrooms</label>
                <select class="form-control form-select form-control-a" id="bathrooms">
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="price">Min Price</label>
                <select class="form-control form-select form-control-a" id="price">
                  <option>Unlimite</option>
                  <option>$50,000</option>
                  <option>$100,000</option>
                  <option>$150,000</option>
                  <option>$200,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Search Property</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- End Property Search Section -->>
  
  
  
    <main id="main">
  
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">ติดต่อ</h1>
                <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</span>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Contact
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->
  
      <!-- ======= Contact Single ======= -->
      <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-map box">
                <div id="map" class="contact-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section><!-- End Contact Single-->
  
    </main><!-- End #main -->

@stop