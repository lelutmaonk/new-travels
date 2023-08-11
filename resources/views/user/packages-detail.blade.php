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
              {!! $packages->description !!}
            </div>

            @if (count($packages->itinerary) > 0)
            <div class="row section-t3 mx-1">
              <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col">Itinerary</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($packages->itinerary as $itinerary)
                  <tr>
                    <td>{{ $itinerary->start_time }}</td>
                    <td>{{ $itinerary->end_time }}</td>
                    <td>{{ $itinerary->itinerary_name }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @endif
           
            @if (count($packages->included) > 0)
              {{-- Included --}}
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Included</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="">
                  @foreach ($packages->included as $included)
                    <li>{{ $included->included_name }}</li>
                  @endforeach
                </ul>
              </div>
              {{-- EndIncluded --}}
            @endif

            @if (count($packages->additional_note) > 0)
              {{-- Included --}}
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Additional Note</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="">
                  @foreach ($packages->additional_note as $additional_note)
                    <li>{{ $additional_note->additional_note_name }}</li>
                  @endforeach
                </ul>
              </div>
              {{-- EndIncluded --}}
            @endif

          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection