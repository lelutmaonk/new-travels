@extends('user.layouts.main')

@section('content')
<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact</h1>
            <span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</span>
          </div>
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.1911607712946!2d115.17339117472378!3d-8.7680780912832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24464b8d2fec1%3A0x4c267b0eed02dda!2sJl.%20Batas%20Kangin%20No.11%2C%20Kedonganan%2C%20Kec.%20Kuta%2C%20Kabupaten%20Badung%2C%20Bali%2080361!5e0!3m2!1sen!2sid!4v1681782909192!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              {{-- <form class="php-email-form"> --}}
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 my-3">
                    <div class="mb-3">
                      {{-- <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                    </div>
                  </div>

                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
              {{-- </form> --}}
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="bi bi-envelope"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">{{ $email }}</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">{{ $phone }}</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="bi bi-geo-alt"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      {{ $address }}
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="bi bi-share"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="{{ $facebook }}" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Single-->

</main>
@endsection