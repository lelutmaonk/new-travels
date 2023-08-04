@extends('user.layouts.main')

@section('content')
   


  <main id="main">
    
    <br><br><br><br><br><br>

      <section class="section-about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 position-relative">
              <div class="about-img-box">
                <img src="https://images.unsplash.com/photo-1561131668-f63504fc549d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=857&q=80" alt="" class="img-fluid">
              </div>
              <div class="sinse-box">
                <h3 class="sinse-title text-white">EXPLORE OUR
                </h3>
                <p>Activities in Bali</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid mt-5">
      <div class="container">

        <div class="row mt-5">

          @foreach ($activities as $item)
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{ $item->image }}" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{ route('user.activities-detail', ['activities' => $item->slug]) }}">{{ $item->activities_name }}</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <a href="{{ route('user.activities-detail', ['activities' => $item->slug]) }}" class="date-b">{!! Str::limit($item->description, 50) !!}</a>
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