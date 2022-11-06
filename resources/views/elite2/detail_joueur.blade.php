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
								<span>PROFIL</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>STATISTIQUES</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">Nom du joueur</h4>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
									<div class="col-lg-12">
										<div class="row gy-3 gx-xl-8">
											<div class="card">
												<div class="card-body">
													<img src="{{ asset('dist\assets\img\avatars\t2.jpg') }}" alt="">
												</div>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>Club <td>Mark</td></td>
														</tr>
														<tr>
															<td>Poste  <td>Jacob</td></td>
														</tr>
														<tr>
															<td>Dorssad <td>Jacob</td></td>
														</tr>
														<tr>
															<td>Nationnaltié <td>Jacob</td></td>
														</tr>
														<tr>
															<td>Date & Lieu de naissance <td>Jacob</td></td>
														</tr>
														<tr>
															<td>Taille <td>Jacob</td></td>
														</tr>
														<tr>
															<td>Adresse (Pied fort) <td>Jacob</td></td>
														</tr>
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-7">
										<div class="row gy-3 gx-xl-8">
											<div class="card">
												<div class="card-body">
													<table class="table table-striped">
														<thead>
															<tr>
																<th scope="col">Saisons</th>
																<th scope="col">Compétitions</th>
																<th scope="col">Clubs</th>
																<th scope="col">MJ</th>
																<th scope="col">MinJ</th>
																<th scope="col">BM</th>
																<th scope="col">PD</th>
																<th scope="col">CJ</th>
																<th scope="col">CR</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>...</td>
																<td>...</td>
																<th>...</th>
																<td>...</td>
																<td>...</td>
																<td>...</td>
																<th>...</th>
																<td>...</td>
																<td>...</td>
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

									<div class="col-lg-5">
										<div class="row gy-3 gx-xl-8">
										  <div class="card">
											<div class="card-body">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Saisons</th>
															<th scope="col">Compétitions</th>
															<th scope="col">Palmarès</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>...</td>
															<th>...</th>
															<td>...</td>
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
						</div>
						
						<div class="tab-pane fade" id="tab1-2">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">Nom du joueur</h4>
								<div class="row mb-6">
									<div class="col-md-4">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une saison</option>
												<option value="1">2022/2023</option>
												<option value="2">2021/2022</option>
												<option value="3">2020/2021</option>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option value="Général" selected>Général</option>
												<option value="Domicil">Domicil</option>
												<option value="Extérieur">Extérieur </option>
												<option value="1ère Mit-temps">1ère Mit-temps</option>
												<option value="2ère Mit-temps">2ère Mit-temps</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-primary">Rechercher</button>
									</div>
								</div>
								<div class="row gy-12 gx-xl-12">
									<div class="card">
										<div class="card-body table-responsive">
											<table class="table-hover table">
												<thead>
													<tr>
														<th scope="col">Matchs joués</th>
														<th scope="col">Minutes jouées</th>
														<th scope="col">Buts marqués</th>
														<th scope="col">Fautes subies</th>
														<th scope="col">Carton jaunes</th>
														<th scope="col">Caton rouges</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!--/.card-body -->
									</div>
								</div>
								<br>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
										  <div class="card">
											<div class="card-body">
											  <table class="table table-striped">
												<tbody>
												  <tr>
													<td>Matchs Comme Entrant <td>Mark</td></td>
												  </tr>
												  <tr>
													<td>Matchs Comme Remplaçant  <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Passes Décisives <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Tirs <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Tirs Cadrés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Hors-Jeu <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Centres <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Matchs Gagnés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Penaltys Marqués <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Coups Francs Marqués <td>Jacob</td></td>
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

									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
										  <div class="card">
											<div class="card-body">
											  <table class="table table-striped">
												<tbody>
												  <tr>
													<td>Fautes Commises <td>Mark</td></td>
												  </tr>
												  <tr>
													<td>Ballons Récupérés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Ballons Interceptés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Passes <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Matchs Sans Encaisser <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Buts Encaissés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Buts Contre Son Camp <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Matchs Perdus <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Penaltys Concédés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td>Penaltys Arrêtés <td>Jacob</td></td>
												  </tr>
												  <tr>
													<td> <td></td></td>
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
						</div>
						<!--/.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!--/column -->
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->
@endsection
