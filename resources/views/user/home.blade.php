@extends('user.layouts.main')

@section('content')
    <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('https://images.unsplash.com/photo-1500213721845-709b85a28da0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">204 </span> Mount
                      <br> Olive Road Two
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('https://images.unsplash.com/photo-1500213721845-709b85a28da0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Rino
                      <br> Venda Road Five
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('https://images.unsplash.com/photo-1500213721845-709b85a28da0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Alira
                      <br> Roan Road One
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
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
    
    <section class="agent-single mt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src="https://images.unsplash.com/photo-1609826704020-26abbd0879c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="" class="agent-avatar img-fluid">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d">Enjoy Traveling With Us</h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
                      Thank you for visiting our website. We are Melali Di Bali, which offers holiday trips to Bali easily and cheaply. 
                    </p>
                    <p class="content-d color-text-a">
                      Bali is one of the most popular tourist destinations in Indonesia and even around the world. To enjoy a pleasant holiday in Bali, you can choose to use our experienced and trusted services.
                    </p>
                    <p class="content-d color-text-a">
                      In addition, we have a professional and experienced team in providing the best service. Our team is able to provide accurate and clear information about the attractions visited, as well as provide the best recommendations for places to eat and lodging.
                    </p>
                    <p class="content-d color-text-a">
                      We offer attractive and fun holiday packages. We also provide a pleasant and unforgettable holiday experience for you, with attractive holiday packages, a professional and experienced team, and flexible and responsive services.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Agent Single -->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid mt-5">
      <div class="container">

        <div class="col-md-12 text-center">
          <div class="title-single-box">
            <h1 class="title-single">EXPLORE OUR</h1>
            <span class="color-text-a">Tourist's Favorit Tour</span>
          </div>
        </div>

        <div class="row mt-5">

          @foreach ($packages as $item)
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{ $item->image }}" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{ route('user.packages-detail', ['packages' => $item->slug]) }}">{{ $item->packages_name }}</a>
                    </h2>
                  </div>
                  <div class="card-category-b mt-2">
                    <a href="{{ route('user.packages-detail', ['packages' => $item->slug]) }}" class="category-b text-white">{{ $item->price }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section><!-- End Blog Grid-->
    

  </main><!-- End #main -->
@endsection