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
								<span>INFOS SUR LE CLUB</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>EFFECTIF</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-3">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>CALENDRIER</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-4">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>RESULTATS</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-5">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>STATISTIQUES</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-6">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>EVALUTION</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-7">
								<i class="uil uil-laptop-cloud pe-1"></i>
								<span>PALMARES</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->

					<div class="tab-content">
						
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
									<div class="col-lg-7">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<div class="card-body">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset($club->stade->photo) }}" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nom : {{ $club->stade->nom }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lieu : {{ $club->stade->lieu }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Capacité : {{ $club->stade->capacite }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
												</div>
												<!--/.card-body -->
                                        
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Contacts</th>
                                                            <th scope="col">Boutique</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>BP : {{ $club->bp }}</td>
                                                            <td>Lieu : {{ $club->boutique->lieu }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tel : {{ $club->telephone }}</td>
                                                            <td>Tel : {{ $club->boutique->telephone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email : {{ $club->email }}</td>
                                                            <td>Horaire : {{ $club->boutique->horaire }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Site : {{ $club->site }}</td>
                                                            <td>Vente maillots : {{ $club->boutique->maillot_v }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Twitter : {{ $club->twitter }}</td>
                                                            <td>Vente Gadgets : {{ $club->boutique->gajet_v }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facebook : {{ $club->facebook }}</td>
                                                            <td>Vente tickets : {{ $club->boutique->ticket_v }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-5">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>Siege Social</td>
                                                            <td>{{ $club->siege }}</td>
														</tr>
														<tr>
															<td>Président</td>
															<td>{{ $club->president }}</td>
														</tr>
														<tr>
															<td>Vice-président</td>
															<td>{{ $club->v_president }}</td>
														</tr>
														<tr>
															<td>Secrétaire G</td>
															<td>{{ $club->secretaire_g }}</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
														<tr>
															<td>Coach Principal</td>
															<td>{{ $club->coach_p }}</td>
														</tr>
														<tr>
															<td>Coach Adjoint</td>
															<td>{{ $club->coach_ad }}</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
														</tr>
														<tr>
															<td>...</td>
															<td>...</td>
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
						</div>

						<div class="tab-pane fade" id="tab1-2">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT BUTEURS</h4>
								<div class="row mb-6">
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
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
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
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Buts Marqués</th>
														<th scope="col">Penaltys</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
														<th scope="col">Points Rapportés</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
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
						</div>

						<div class="tab-pane fade" id="tab1-3">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT PASSEURS DECISIFS</h4>
								<div class="row mb-6">
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
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
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
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Passes Décisives</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-4">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT GENERAL</h4>
								<div class="row mb-6">
									<div class="col-md-3">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une saison</option>
												<option value="1">2022/2023</option>
												<option value="2">2021/2022</option>
												<option value="3">2020/2021</option>
											</select>
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Selectionner une phase</option>
												<option value="1">Poule A</option>
												<option value="2">Poule B</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option selected>Général</option>
												<option value="1">Dom</option>
												<option value="2">Ext</option>
												<option value="3">1ere Mt</option>
												<option value="3">2e Mt</option>
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
														<th scope="col">Rang</th>
														<th scope="col">Ev</th>
														<th scope="col">Clubs</th>
														<th scope="col">Points</th>
														<th scope="col">MJ</th>
														<th scope="col">MG</th>
														<th scope="col">MN</th>
														<th scope="col">MP</th>
														<th scope="col">BM</th>
														<th scope="col">BE</th>
														<th scope="col">Dif</th>
														<th scope="col">Forme</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td><i class="uil uil-arrow-up"></i></td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>r-b-v-v-v</td>
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
						</div>

						<div class="tab-pane fade" id="tab1-5">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT BUTEURS</h4>
								<div class="row mb-6">
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
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
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
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Buts Marqués</th>
														<th scope="col">Penaltys</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
														<th scope="col">Points Rapportés</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
														<td>...</td>
														<td>...</td>
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
						</div>

						<div class="tab-pane fade" id="tab1-6">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT PASSEURS DECISIFS</h4>
								<div class="row mb-6">
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
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
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
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Passes Décisives</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-7">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT PASSEURS DECISIFS</h4>
								<div class="row mb-6">
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
												<option selected>Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
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
														<th scope="col">Rang</th>
														<th scope="col">Jouer</th>
														<th scope="col">Clubs</th>
														<th scope="col">Passes Décisives</th>
														<th scope="col">Matchs Afférents</th>
														<th scope="col">Minutes Jouées</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													<tr>
														<th scope="row">1</th>
														<td>...</td>
														<td>Logo----Nom</td>
														<td>...</td>
														<th>...</th>
														<td>...</td>
													</tr>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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
