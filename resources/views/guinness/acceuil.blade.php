@extends('layouts.client')

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
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><img src="" style="height: 50px; width: 50px;" alt=""> club</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
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
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection