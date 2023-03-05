@extends('layouts.main')
@section('content')
<div class="site-blocks-cover inner-page" style="background-image: url('assets1/images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto align-self-center">
                <div class=" text-center">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center mt-3 mb-3">
            <h2 class="text-dark">About</h2>
            <p>Website ini dibuat dengan tujuan untuk membuat sistem bisnis menjadi lebih
                terstruktur, modern, fleksibel, dan juga untuk mempermudah
                konsumen untuk membeli obat tanpa harus datang langsung ke toko apotek nya langsung.</p>

            {{-- <a class="cta-btn" href="contact.html">Available for hire</a> --}}

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets1/apotek.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2 class="text-success">Apotek Assalaam Farma</h2>
            {{-- <p class="fst-italic py-3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --}}
            <div class="row">
              <div class="col-lg-6">
                <table>
                  <tr>
                    <td><strong class="text-dark">Since</strong> </td>
                    <td> : </td>
                    <td><span>1 May 1995</span></td>
                  </tr>
                  <tr>
                    <td><strong class="text-dark">Web</strong> </td>
                    <td> : </td>
                    <td><span>www.assalaamfarma.com</span></td>
                  </tr>
                  <tr>
                    <td><strong class="text-dark">Phone</strong> </td>
                    <td> : </td>
                    <td><span>+123 456 7890</span></td>
                  </tr>
                  <tr>
                    <td><strong class="text-dark">City</strong> </td>
                    <td> : </td>
                    <td><span>Bandung, Jawa Barat</span></td>
                  </tr>
                </table>
                {{-- <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Since:</strong> <span>1 May 1995</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Web:</strong> <span>www.assalaamfarma.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bandung, Jawa Barat</span></li>
                </ul> --}}
              </div>
              {{-- <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div> --}}
            </div>
            <p class="py-3">
                Di website apotek ini Customer/Pembeli bisa melihat informasi tentang apotek ini.
                Selain itu Customer bisa juga melihat bermacam-macam jenis obat yang disediakan di website apotek
                ini dan juga bisa membeli obat yang tersedia.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Testimonials Section -->

  </main>


{{-- <div class="site-section bg-light custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="block-16">
                    <figure>
                        <img src="{{asset('assets1/images/bg_1.jpg')}}" alt="Image placeholder"
                            class="img-fluid rounded">

                    </figure>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">


                <div class="site-section-heading pt-3 mb-4">
                    <h2 class="text-black">Tujuan Website</h2>
                </div>
                <p>Website kami bertujuan untuk membuat sistem bisnis menjadi lebih
                    terstruktur, modern, fleksibel, dan juga untuk mempermudah
                    konsumen untuk membeli obat tanpa harus datang langsung ke toko apotek langsung.</p>

            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="site-section bg-light custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 order-md-2">
                <div class="block-16">
                    <figure>
                        <img src="{{asset('assets1/images/hero_1.jpg')}}" alt="Image placeholder"
                            class="img-fluid rounded">

                    </figure>
                </div>
            </div>
            <div class="col-md-5 mr-auto">


                <div class="site-section-heading pt-3 mb-4">
                    <h2 class="text-black">Ada Apa Saja di Website Apotek Ini?</h2>
                </div>
                <p class="text-black">Di website apotek ini Customer/Pembeli bisa melihat informasi tentang apotek ini.
                    Selain itu Customer bisa juga melihat bermacam-macam jenis obat yang disediakan di website apotek
                    ini
                    dan juga bisa membeli obat yang tersedia.
                </p>

            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
      <div class="header-body">
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Stock Obat</h5>
                    <span class="h2 font-weight-bold mb-0">350,897</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                      <i class="fas fa-chart-bar"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Data user</h5>
                    <span class="h2 font-weight-bold mb-0">2,356</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                  <span class="text-nowrap">Since last week</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Data akun</h5>
                    <span class="h2 font-weight-bold mb-0">924</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                  <span class="text-nowrap">Since yesterday</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <i class="fas fa-percent"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

{{-- <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck text-primary"></span>
                </div>
                <div class="text">
                    <h2>Free Shipping</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                        accumsan
                        tincidunt fringilla.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-refresh2 text-primary"></span>
                </div>
                <div class="text">
                    <h2>Free Returns</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                        accumsan
                        tincidunt fringilla.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help text-primary"></span>
                </div>
                <div class="text">
                    <h2>Customer Support</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                        accumsan
                        tincidunt fringilla.</p>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div class="site-section bg-light custom-border-bottom" data-aos="fade">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>The Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-5">

                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{asset('assets1/images/person_1.jpg')}}" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Elizabeth Graham</h3>
                            <p class="block-38-subheading">CEO/Co-Founder</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio
                                recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{asset('assets1/images/person_2.jpg')}}" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Jennifer Greive</h3>
                            <p class="block-38-subheading">Co-Founder</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio
                                recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{asset('assets1/images/person_3.jpg')}}" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Patrick Marx</h3>
                            <p class="block-38-subheading">Marketing</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio
                                recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-5">
                <div class="block-38 text-center">
                    <div class="block-38-img">
                        <div class="block-38-header">
                            <img src="{{asset('assets1/images/person_4.jpg')}}" alt="Image placeholder" class="mb-4">
                            <h3 class="block-38-heading h4">Mike Coolbert</h3>
                            <p class="block-38-subheading">Sales Manager</p>
                        </div>
                        <div class="block-38-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit
                                distinctio
                                recusandae doloribus ut fugit officia voluptate soluta. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection