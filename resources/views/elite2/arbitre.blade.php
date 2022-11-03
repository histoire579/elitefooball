@extends('layouts.main')

@section('content')
	<section class="wrapper bg-soft-primary">
		<div class="py-md-12 container py-10 text-center">
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
	<section class="wrapper bg-light angled lower-end" style="margin: 0 5%">
		<div class="py-md-8 container-fluid py-6">
			<div class="row gx-lg-8 gx-xl-12 gy-10 mb-md-17 align-items-center mb-14">
				<div class="col-md-12 position-relative">
					<ul class="nav nav-tabs nav-pills col-md-12 d-flex justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">
								<i class="uil uil-phone-volume pe-1"></i>
								<span>GENERAL</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>BUTEURS</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-3">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>PASSEURS DECISIFS</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->
					
					<h4 class="display-6 mb-8 mt-6 text-center">ARBITRES</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="form-select-wrapper mb-4">
								<select class="form-select" aria-label="Default select example">
									<option selected>Selectionner une saison</option>
									<option value="1">2022/2023</option>
									<option value="2">2021/2022</option>
									<option value="3">2020/2021</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-select-wrapper mb-4">
								<select class="form-select" aria-label="Default select example">
									<option selected>Club</option>
									<option value="1">Coton</option>
									<option value="2">Bamboutos</option>
									<option value="3">Aigle</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<button class="btn btn-primary">Rechercher</button>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
									<h4 class="mb-1">Nom de l'arbitre</h4>
									<div class="meta mb-2">Nationnalité</div>
									<div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
									<div class="meta mb-2">Nationnalité</div>
									<div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
									<div class="meta mb-2">Nationnalité</div>
									<div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
                                    <div class="meta mb-2">Nationnalité</div>
                                    <div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
                                    <div class="meta mb-2">Nationnalité</div>
                                    <div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
                                    <div class="meta mb-2">Nationnalité</div>
                                    <div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
                                    <div class="meta mb-2">Nationnalité</div>
                                    <div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<div class="col-md-3">
					<!--/.swiper-slide -->
					<div class="swiper-slide">
						<div class="item-inner">
							<div class="card">
								<div class="card-body">
									<img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg"
										srcset="{{ asset('dist/assets/img/avatars/te2@2x.jpg') }}" alt="" />
                                    <h4 class="mb-1">Nom de l'arbitre</h4>
                                    <div class="meta mb-2">Nationnalité</div>
                                    <div class="meta mb-2">Année d'arriver en elite</div>
									<p class="mb-2"></p>
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
				</div>
				<!--/column -->


			</div>

		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->
@endsection
