@extends('layouts.main')

@section('content')

<section class="wrapper bg-soft-primary">
  <div class="container py-10 py-md-12 text-center">
    <div class="row">
      <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
        <h1 class="display-1 mb-3">PUB</h1>
        
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled lower-end">
  <div class="container py-6 py-md-8">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
      <div class="col-lg-6 position-relative ">
        <div class="card">
          <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide bg-overlay bg-overlay-400 rounded">
                  <img src="dist/assets/img/photos/is1.jpg" alt="" />
                  <div class="caption-wrapper p-12">
                    <div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s"><h5 class="mb-0">Actualités</h5></div>
                    <!--/.caption -->
                  </div>
                  <!--/.caption-wrapper -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide rounded">
                  <img src="dist/assets/img/photos/is2.jpg" alt="" />
                  <div class="caption-wrapper p-12">
                    <div class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s"><h5 class="mb-0">Actualités</h5></div>
                    <!--/.caption -->
                  </div>
                  <!--/.caption-wrapper -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide"><img src="dist/assets/img/photos/is3.jpg" class="rounded" alt="" /></div>
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!--/.card-body -->
          
        </div>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        
        <h4 class="display-6 mb-3">Classement général</h4>

        <div class="row gy-3 gx-xl-8">
          <div class="card">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Rang</th>
                  <th scope="col">Clubs</th>
                  <th scope="col">MJ</th>
                  <th scope="col">Pts</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                  <td>@twitter</td>
                  <tr>
                    <th scope="row">4</th>
                    <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                    <td>@twitter</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                    <td>@twitter</td>
                  </tr>
                </tr>
              </tbody>
            </table>
            <!--/.card-body -->
            
          </div>
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      
    </div>
    <!--/.row -->
    <div class="row mb-5">
      <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
        <img src="dist/assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-4 px-lg-14">Here are 3 working steps to organize our business projects.</h2>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-6 order-lg-2">
        <div class="card me-lg-6">
          <div class="card-body p-6">
            <div class="d-flex flex-row">
              <div>
                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
              </div>
              <div>
                <h4 class="mb-1">Collect Ideas</h4>
                <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
              </div>
            </div>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="card ms-lg-13 mt-6">
          <div class="card-body p-6">
            <div class="d-flex flex-row">
              <div>
                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
              </div>
              <div>
                <h4 class="mb-1">Data Analysis</h4>
                <p class="mb-0">Vivamus sagittis lacus vel augue laoreet.</p>
              </div>
            </div>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="card mx-lg-6 mt-6">
          <div class="card-body p-6">
            <div class="d-flex flex-row">
              <div>
                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
              </div>
              <div>
                <h4 class="mb-1">Finalize Product</h4>
                <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
              </div>
            </div>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <h2 class="display-6 mb-3">How It Works?</h2>
        <p class="lead fs-lg pe-lg-5">Find out everything you need to know and more about how we create our business process models.</p>
        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.</p>
        <p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p>
        <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-soft-primary">
  <div class="container pt-16 pb-14 pb-md-0">
    <div class="row gx-lg-8 gx-xl-0 align-items-center">
      <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
        <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
        <figure><img src="dist/assets/img/photos/co1.png" srcset="dist/assets/img/photos/co1@2x.png 2x" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
        <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <blockquote class="icon fs-lg">
                  <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur nulla dapibus curabitur blandit faucibus.”</p>
                  <div class="blockquote-details">
                    <div class="info ps-0">
                      <h5 class="mb-1">Coriss Ambady</h5>
                      <p class="mb-0">Financial Analyst</p>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <blockquote class="icon fs-lg">
                  <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                  <div class="blockquote-details">
                    <div class="info ps-0">
                      <h5 class="mb-1">Cory Zamora</h5>
                      <p class="mb-0">Marketing Specialist</p>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <blockquote class="icon fs-lg">
                  <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                  <div class="blockquote-details">
                    <div class="info ps-0">
                      <h5 class="mb-1">Nikolas Brooten</h5>
                      <p class="mb-0">Sales Manager</p>
                    </div>
                  </div>
                </blockquote>
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row mb-3">
      <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
        <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3 px-lg-14">Save your time and money by choosing our professional team.</h2>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <div class="position-relative">
      <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
      <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
      <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="dist/assets/img/avatars/te1.jpg" srcset="dist/assets/img/avatars/te1@2x.jpg 2x" alt="" />
                    <h4 class="mb-1">Coriss Ambady</h4>
                    <div class="meta mb-2">Financial Analyst</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="dist/assets/img/avatars/te2.jpg" srcset="dist/assets/img/avatars/te2@2x.jpg 2x" alt="" />
                    <h4 class="mb-1">Cory Zamora</h4>
                    <div class="meta mb-2">Marketing Specialist</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="dist/assets/img/avatars/te3.jpg" srcset="dist/assets/img/avatars/te3@2x.jpg 2x" alt="" />
                    <h4 class="mb-1">Nikolas Brooten</h4>
                    <div class="meta mb-2">Sales Manager</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="dist/assets/img/avatars/te4.jpg" srcset="dist/assets/img/avatars/te4@2x.jpg 2x" alt="" />
                    <h4 class="mb-1">Jackie Sanders</h4>
                    <div class="meta mb-2">Investment Planner</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="dist/assets/img/avatars/te5.jpg" srcset="dist/assets/img/avatars/te5@2x.jpg 2x" alt="" />
                    <h4 class="mb-1">Laura Widerski</h4>
                    <div class="meta mb-2">Sales Specialist</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle w-15 mb-4" src="dist/assets/img/avatars/te6.jpg" srcset="dist/assets/img/avatars/te6@2x.jpg 2x" alt="" />
                    <h4 class="mb-1">Tina Geller</h4>
                    <div class="meta mb-2">Financial Analyst</div>
                    <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                    <nav class="nav social mb-0">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.position-relative -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-soft-primary angled lower-start">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-xl-10 mx-auto">
        <div class="row align-items-center counter-wrapper gy-6 text-center">
          <div class="col-md-3">
            <img src="dist/assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
            <h3 class="counter">7518</h3>
            <p>Completed Projects</p>
          </div>
          <!--/column -->
          <div class="col-md-3">
            <img src="dist/assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
            <h3 class="counter">3472</h3>
            <p>Satisfied Customers</p>
          </div>
          <!--/column -->
          <div class="col-md-3">
            <img src="dist/assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
            <h3 class="counter">2184</h3>
            <p>Expert Employees</p>
          </div>
          <!--/column -->
          <div class="col-md-3">
            <img src="dist/assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
            <h3 class="counter">4523</h3>
            <p>Awards Won</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container pt-19 pb-14 pt-md-20 pb-md-16">
    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
        <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
        <figure class="rounded"><img src="dist/assets/img/photos/about4.jpg" srcset="dist/assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
      </div>
      <!--/column -->
      <div class="col-lg-6">
        <img src="dist/assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Address</h5>
            <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">Phone</h5>
            <p>00 (123) 456 78 90</p>
          </div>
        </div>
        <div class="d-flex flex-row">
          <div>
            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
          </div>
          <div>
            <h5 class="mb-1">E-mail</h5>
            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-soft-primary">
  <div class="container py-14 py-md-16 text-center">
    <div class="row">
      <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
        <img src="dist/assets/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3">Join Our Community</h2>
        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
        <div class="newsletter-wrapper">
          <!-- Begin Mailchimp Signup Form -->
          <div id="mc_embed_signup2">
            <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll2">
                <div class="mc-field-group input-group form-floating">
                  <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                  <label for="mce-EMAIL2">Email Address</label>
                  <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                </div>
                <div id="mce-responses2" class="clear">
                  <div class="response" id="mce-error-response2" style="display:none"></div>
                  <div class="response" id="mce-success-response2" style="display:none"></div>
                </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                <div class="clear"></div>
              </div>
            </form>
          </div>
          <!--End mc_embed_signup-->
        </div>
        <!-- /.newsletter-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->

@endsection
