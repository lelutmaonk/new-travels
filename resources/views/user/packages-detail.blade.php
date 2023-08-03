@extends('user.layouts.main')

@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $packages->packages_name }}</h1>
              <span class="color-text-a">Packages</span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box d-flex justify-content-center">
                <img src="{{ $packages->image }}" alt="" class="img-fluid">
              </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              <ul class="list-inline text-center color-a">
                <li class="list-inline-item mr-2">
                    <strong><i class="bi bi-clock" aria-hidden="true"></i></strong>
                    <span class="color-text-a">{{ $packages->packages_duration }} Tour Duration</span>
                </li>
                <li class="list-inline-item mr-2">
                    <strong><i class="bi bi-people-fill" aria-hidden="true"></i></strong>
                    <span class="color-text-a">Minimum For {{ $packages->minimun_order }} Pax Booking</span>
                </li>
                <li class="list-inline-item">
                    <strong><i class="bi bi-cash-stack" aria-hidden="true"></i></strong>
                    <span class="color-text-a">{{ $packages->price }}</span>
                </li>
              </ul>
            </div>
            <div class="post-content color-text-a">
              <p>{{ $packages->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection