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
  <div class="container py-10 py-md-10">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
      <div class="col-lg-7 position-relative ">
        <div class="card">
          <div class="card-body">
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
                <!-- /.swiper-container -->
          </div>
          <!--/.card-body -->
          
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-4 ">
            <div class="card mt-5">
              <figure class="card-img-top"><img class="img-fluid" src="dist/assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">Coriss Ambady</h4>
                <p class="mb-0">Financial Analyst</p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/column -->
          <div class="col-lg-4">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Meilleur buteur</h2>
          </div>
          <!--/column -->
          <div class="col-lg-4">
            
          </div>
          <!--/column -->
        </div>
        <!--/.row -->

        <div class="row gx-lg-8 gx-xl-1 gy-1 align-items-center mt-10">
          <div class="col-lg-6 ">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Statistiques Générales</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
              
              </tbody>
            </table>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Forme des 03 premiers</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
               
              </tbody>
            </table>
          </div>
          <!--/column -->
         
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      <div class="col-lg-5">
        
        <h4 class="display-6 mb-3">Classement</h4>

        <div class="row gy-3 gx-xl-8">
          <div class="card">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--/.card-body -->
            
          </div>
        </div>
        <!--/.row -->
      </div>
      <!--/column -->
      
    </div>
    <!--/.row -->
    
    
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
  <div class="container py-1 py-md-5">
    <h2 class="fs-15 text-uppercase text-muted text-center mb-8"></h2>
    <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-autoplay-timeout="3000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c1.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c2.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c3.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c4.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c5.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c6.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c7.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c8.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c9.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c10.png" alt="" /></div>
          <div class="swiper-slide px-5"><img src="dist/assets/img/brands/c11.png" alt="" /></div>
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


@endsection
