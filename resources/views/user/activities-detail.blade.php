@extends('user.layouts.main')

@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $activities->activities_name }}</h1>
              <span class="color-text-a">Activities</span>
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
                <img src="{{ $activities->image }}" alt="" class="img-fluid">
              </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              
            </div>
            <div class="post-content color-text-a">
              {!! $activities->description  !!}
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection