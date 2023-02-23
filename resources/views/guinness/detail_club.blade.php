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
								<span>EVOLUTION</span>
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
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
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
                                                            <td>Vente tickets : {{ $club->boutique->tikect_v }}</td>
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
												<table style="margin-top: 20px;" class="table table-striped">
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
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>

								<label for="">Gardiens -- {{ $nbre_gard }}</label>
								<hr class="mb-1">
								@foreach ($gardiens as $gardien)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($gardien->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $gardien->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $gardien->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach

								<label for="">Défenseurs -- {{ $nbre_def }}</label>
								<hr class="mb-1">
								@foreach ($defenseurs as $defenseur)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($defenseur->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $defenseur->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $defenseur->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach

								<label for="">Milieux -- {{ $nbre_mil }}</label>
								<hr class="mb-1">
								@foreach ($milieux as $milieu)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($milieu->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $milieu->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $milieu->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach

								<label for="">Attaquants -- {{ $nbre_attaq }}</label>
								<hr class="mb-1">
								@foreach ($attaquants as $attaquant)
								<div class="col-md-3">
									<!--/.swiper-slide -->
									<div class="swiper-slide">
										<div class="item-inner">
											<div class="card">
												<div class="card-body">
													<img class="rounded-circle w-15 mb-4" src="{{ asset($attaquant->joueur->photo) }}" alt="" />
													<h4 class="mb-1">{{ $attaquant->joueur->nom }}</h4>
													<div class="meta mb-2">Dorssad : {{ $attaquant->dorssad }}</div>
												</div>
												<!--/.card-body -->
											</div>
											<!-- /.card -->
										</div>
										<!-- /.item-inner -->
									</div>
								</div>
								<!--/column -->
								@endforeach
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-3">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gy-12 gx-xl-12">
									<div class="card table-responsive">
										<table class="table-hover table">
											<thead>
												<tr>
													<th scope="col">Compétitions</th>
													<th scope="col">Journées/Phases</th>
													<th scope="col">Dates</th>
													<th scope="col">Matchs</th>
													<th scope="col">Heures</th>
													<th scope="col">Lieux</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($calendiers as $calendier)
												<tr>
													<td>{{ $calendier->competition->libelle }}</td>
													<td>{{ $calendier->journee->libelle }} / {{ $calendier->phase->libelle }}</td>
													<td>{{ $calendier->date }}</td>
													<td>{{ $calendier->club1->nom }} <img src="{{ asset($calendier->club1->logo) }}" style="height: 20px; width: 20px;" alt=""> <strong>VS</strong> <img src="{{ asset($calendier->club2->logo) }}" style="height: 20px; width: 20px;" alt=""> {{ $calendier->club2->nom }}</td>
													<td>{{ $calendier->heure }}</td>
													<td>{{ $calendier->stade->nom }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-4">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gy-12 gx-xl-12">
									<div class="card table-responsive">
										<table class="table-hover table">
											<thead>
												<tr>
													<th scope="col">Compétitions</th>
													<th scope="col">Journées/Phases</th>
													<th scope="col">Dates</th>
													<th scope="col">Matchs</th>
													<th scope="col">Heures</th>
													<th scope="col">Lieux</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($resultats as $resultat)
												<tr>
													<td>{{ $resultat->competition->libelle }}</td>
													<td>{{ $resultat->journee->libelle }} / {{ $resultat->phase->libelle }}</td>
													<td>{{ $resultat->date }}</td>
													<td>{{ $resultat->club1->nom }} <img src="{{ asset($resultat->club1->logo) }}" style="height: 20px; width: 20px;" alt=""> <strong> {{ $resultat->nbre_but_club1 }} -- {{ $resultat->nbre_but_club2 }} </strong> <img src="{{ asset($resultat->club2->logo) }}" style="height: 20px; width: 20px;" alt=""> {{ $resultat->club2->nom }}</td>
													<td>{{ $resultat->heure }}</td>
													<td>{{ $resultat->stade->nom }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-5">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-4">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="domiciliation" id="domiciliation" aria-label="Default select example">
													<option value="Domicil">Domicil</option>
													<option value="Domicil">Extérieur</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Matchs Joués</th>
															<th scope="col">Matchs Gagnés</th>
															<th scope="col">Matchs Nuls</th>
															<th scope="col">Matchs Perdus</th>
															<th scope="col">Buts Marqués</th>
															<th scope="col">Buts Encaissés</th>
														</tr>
													</thead>
													<tbody>
														@foreach($details as $detail)
														<tr>
															<td>{{ $detail->total_match ?? '0' }}</td>
															<td>{{ $match_gagnes ?? '0' }}</td>
															<td>{{ $match_null ?? '0' }}</td>
															<td>{{ $match_perdu ?? '0' }}</td>
															<td>{{ $detail->total_but_marque ?? '0' }}</td>
															<td>{{ $detail->total_but_encaisse ?? '0' }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col"></th>
															<th scope="col">Cartons Jaunes</th>
															<th scope="col">Cartons Rouges</th>
															<th scope="col">Fautes Commises</th>
															<th scope="col">Fautes Subies</th>
															<th scope="col">Hors-Jeu</th>
														</tr>
													</thead>
													<tbody>
														@foreach($statistique as $item)
														@foreach($details as $detail)
														<tr>
															<td>Nombre</td>
															<td>{{ $item->carton_jaune ?? '0' }}</td>
															<td>{{ $item->carton_rouge ?? '0' }}</td>
															<td>{{ $item->faute_comise ?? '0' }}</td>
															<td>{{ $item->faute_subies ?? '0' }}</td>
															<td>{{ $item->hors_jeux ?? '0' }}</td>
														</tr>
														<tr>
															<td>Moyenne / Match</td>
															@php
															if ($detail->total_match != 0) {
																$carton_jaune = $item->carton_jaune/$detail->total_match;
																$carton_rouge = $item->carton_rouge/$detail->total_match;
																$faute_comise = $item->faute_comise/$detail->total_match;
																$faute_subies = $item->faute_subies/$detail->total_match;
																$hors_jeux = $item->hors_jeux/$detail->total_match;
															}
															@endphp
															<td>{{ $carton_jaune ?? '0' }}</td>
															<td>{{ $carton_rouge ?? '0' }}</td>
															<td>{{ $faute_comise ?? '0' }}</td>
															<td>{{ $faute_subies ?? '0' }}</td>
															<td>{{ $hors_jeux ?? '0' }}</td>
														</tr>
														@endforeach
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<h4 style="margin-top: 10px;" class="display-8 mb-3">Attaque</h4>
												<table class="table table-striped">
													<tbody>
														@foreach($details as $detail)
														<tr>
															<td>Buts Marqués / Match</td>
															@php
															if ($detail->total_match != 0) {
																$total_but_marque = $detail->total_but_marque/$detail->total_match;
															}
															@endphp
															<td>{{ $total_but_marque ?? '0' }}</td>
														</tr>
														@endforeach
														@foreach($stat_atatque as $item)
														<tr>
															<td>Tirs</td>
															<td>{{ $item->tir ?? '0' }}</td>
														</tr>
														<tr>
															<td>Tirs Cadrés</td>
															<td>{{ $item->tir_cadre ?? '0' }}</td>
														</tr>
														<tr>
															<td>Penaltys Marqués</td>
															<td>{{ $item->penalty_marque ?? '0' }}</td>
														</tr>
														<tr>
															<td>Corners</td>
															<td>{{ $item->corner ?? '0' }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<h4 style="margin-top: 10px;" class="display-8 mb-3">Défense</h4>
												<table class="table table-striped">
													<tbody>
														@foreach($details as $detail)
														<tr>
															<td>Buts Encaissés / Match</td>
															@php
															if ($detail->total_match != 0) {
																$total_but_encaisse = $detail->total_but_encaisse/$detail->total_match;
															}
															@endphp
															<td>{{ $total_but_encaisse ?? '0' }}</td>
														</tr>
														@endforeach
														@foreach($but_contre_camp as $item)
														<tr>
															<td>Match Sans Encaisser</td>
															<td>{{ $item->nbre_match ?? '0' }}</td>
														</tr>
														<tr>
															<td>Buts Contre Son Camp</td>
															<td>{{ $item->but_contre_camp ?? '0' }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<h4 style="margin-top: 10px;" class="display-8 mb-3">Meilleurs buteurs</h4>
												<table>
													<tbody>
														<tr>
															<td><img style="height: 100px; width: 100px;" src="{{ asset($photo) }}" alt=""></td>
														</tr>
													</tbody>
												</table>
												<br>
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Rang</th>
															<th scope="col">Jouers</th>
															<th scope="col">Buts</th>
														</tr>
													</thead>
													<tbody>
														@php
															$rang = 0;
														@endphp
														@foreach($buteurs as $buteur)
														@php
															$rang++;
														@endphp
														<tr>
															<td>{{ $rang }}</td>
															<td>{{ $buteur->nom  }}</td>
															<td>{{ $buteur->but }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<h4 style="margin-top: 10px;" class="display-8 mb-3">Meilleurs passeurs</h4>
												<table>
													<tbody>
														<tr>
															<td><img style="height: 100px; width: 100px;" src="{{ asset($photo2) }}" alt=""></td>
														</tr>
													</tbody>
												</table>
												<br>
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Rang</th>
															<th scope="col">Jouers</th>
															<th scope="col">Passes</th>
														</tr>
													</thead>
													<tbody>
														@php
															$rang = 0;
														@endphp
														@foreach($passeurs as $passeur)
														@php
															$rang++;
														@endphp
														<tr>
															<td>{{ $rang }}</td>
															<td>{{ $passeur->nom  }}</td>
															<td>{{ $passeur->passe }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="tab1-6">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<div class="row mb-6">
									<div class="col-md-4">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option value="">Selectionner une saison</option>
												<option value="1">2022/2023</option>
												<option value="2">2021/2022</option>
												<option value="3">2020/2021</option>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-select-wrapper mb-4">
											<select class="form-select" aria-label="Default select example">
												<option value="">Selectionner une journée</option>
												<option value="1">Journée 1</option>
												<option value="2">Journée 2</option>
												<option value="3">Journée 3</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<button type="submit" class="btn btn-primary">Rechercher</button>
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
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $club->nom }}</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-6">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													<option value="">Toutes les saisons</option>
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
								<div class="row gy-12 gx-xl-12">
									<div class="card table-responsive">
										<table class="table-hover table">
											<thead>
												<tr>
													<th scope="col">Rang</th>
													<th scope="col">Compétition</th>
													<th scope="col">Saison</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($palmares_clubs as $palmares_club)
												<tr>
													<td>{{ $palmares_club->rang }}</td>
													<td>{{ $palmares_club->competition->libelle }}</td>
													<td>{{ $palmares_club->saison->libelle }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
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
