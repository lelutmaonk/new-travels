@extends('user.layouts.main')

@section('content')
  <main id="main">
    
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">About</h1>
              <span class="color-text-a">Lorem ipsum dolor sit amet.</span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <section class="agent-single">
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
                
                {{-- content --}}
                <div class="agent-info-box">
                  <div class="agent-content mb-3">
                    <h5 class="color-a">Our Mission
                    </h5>
                    <p class="content-d color-text-a">
                      Shows the World that Bali is Home to Everyone
                    </p>
                  </div>
                </div>

                <div class="agent-info-box">
                  <div class="agent-content mb-3">
                    <h5 class="color-a">Extraordinary Experiences
                    </h5>
                    <p class="content-d color-text-a">
                      Bali Best Adventures has a long experience dealing with tourists in Bali. We regularly create tour packages for both domestic and international. Some of our clients are from the corporation, and government segments, too. These meetings mostly come from outside Bali, like Jakarta, Bandung, and Surabaya.
                    </p>
                  </div>
                </div>

                <div class="agent-info-box">
                  <div class="agent-content mb-3">
                    <h5 class="color-a">Our Core Values
                    </h5>
                    <p class="content-d color-text-a">
                      Fast Respond and Easy to Understand 
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Agent Single -->

  </main><!-- End #main -->
@endsection