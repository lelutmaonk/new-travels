@extends('user.layouts.main')

@section('content')
   


  <main id="main">
    
    <br><br><br><br><br><br>

      <section class="section-about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 position-relative">
              <div class="about-img-box">
                <img src="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" class="img-fluid">
              </div>
              <div class="sinse-box">
                <h3 class="sinse-title text-white">EXPLORE OUR
                </h3>
                <p>Tourist's Favorit Package's Tour</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid mt-5">
      <div class="container">

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
                  <div class="card-date">
                    <a href="" class="date-b">{{ Str::limit($item->description, 50) }}</a>
                  </div>
                  <div class="card-category-b mt-2">
                    <a href="" class="category-b text-white">{{ $item->price }}</a>
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