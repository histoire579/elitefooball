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
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $detail_club_saison->joueur->nom }}</h4>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
									<div class="col-lg-4">
										<div class="row gy-3 gx-xl-8">
											<div class="card">
												<div class="card-body">
													<img src="{{ asset($detail_club_saison->joueur->photo) }}" alt="">
												</div>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-8">
										<div class="row gy-3 gx-xl-8">
											<div class="card">
												<table style="margin-top: 20px;" class="table table-striped">
													<tbody>
														<tr>
															<td>Club</td>
															<td>{{ $detail_club_saison->club->nom }}</td>
														</tr>
														<tr>
															<td>Poste</td>
															<td>{{ $detail_club_saison->poste->libelle }}</td>
														</tr>
														<tr>
															<td>Dorssad</td>
															<td>{{ $detail_club_saison->dorssad }}</td>
														</tr>
														<tr>
															<td>Nationnaltié</td>
															<td>{{ $detail_club_saison->joueur->pays->nom }}</td>
														</tr>
														<tr>
															<td>Date & Lieu de naissance</td>
															<td>{{ $detail_club_saison->joueur->date_nais }} à {{ $detail_club_saison->joueur->lieu_nais }}</td>
														</tr>
														<tr>
															<td>Taille</td>
															<td>{{ $detail_club_saison->joueur->taille }}</td>
														</tr>
														<tr>
															<td>Adresse (Pied fort)</td>
															<td>{{ $detail_club_saison->joueur->pied_fort }}</td>
														</tr>
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-12">
										<h4 class="display-6 mb-3">Performance</h4>
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
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
														@foreach ($statistiques as $statistique)
														<tr>
															<td>{{ $statistique->saison }}</td>
															<td>...</td>
															<td><img src="" style="height: 20px; width: 20px;" alt="">...</td>
															<td>{{ $statistique->nbre_match ?? '0' }}</td>
															<td>{{ $statistique->minute_jouer ?? '0' }}</td>
															<td>{{ $statistique->but ?? '0' }}</td>
															<th>{{ $statistique->passe ?? '0' }}</th>
															<td>{{ $statistique->jaune ?? '0' }}</td>
															<td>{{ $statistique->rouge ?? '0' }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-12">
										<h4 class="display-6 mb-3">Palmares</h4>
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col">Saisons</th>
															<th scope="col">Compétitions</th>
															<th scope="col">Palmarès</th>
														</tr>
													</thead>
													<tbody>
														@foreach ($palmares as $palmare)
														<tr>
															<td>{{ $palmare->saison->libelle }}</td>
															<td>{{ $palmare->competition->libelle }}</td>
															<td>{{ $palmare->recompence }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
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
								<h4 class="display-6 mb-8 mt-6 text-center">{{ $detail_club_saison->joueur->nom }}</h4>
								<form action="{{ route('joueur_by_domiciliation_one') }}" method="get">
									@csrf
									<div class="row mb-6">
										<input type="text" value="{{ $detail_club_saison->joueur->id }}" name="joueur_id" id="joueur_id" hidden>

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
													<option value="Général" selected>Général</option>
													<option value="Domicil">Domicil</option>
													<option value="Extérieur">Extérieur </option>
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
													<th scope="col">Matchs joués</th>
													<th scope="col">Minutes jouées</th>
													<th scope="col">Buts marqués</th>
													<th scope="col">Fautes subies</th>
													<th scope="col">Carton jaunes</th>
													<th scope="col">Caton rouges</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($stats as $stat)
												<tr>
													<td>{{ $stat->nbre_match ?? '0' }}</td>
													<td>{{ $stat->minute_jouer ?? '0' }}</td>
													<td>{{ $stat->but ?? '0' }}</td>
													<td>{{ $stat->faute_subis ?? '0' }}</td>
													<td>{{ $stat->jaune ?? '0' }}</td>
													<td>{{ $stat->rouge ?? '0' }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<br>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table style="margin-top: 20px;" class="table table-striped">
													<tbody>
														@foreach ($stats as $stat)
														<tr>
															<td>Matchs Comme Entrant</td>
															<td>{{ $nbre_entrant ?? '0' }}</td>
														</tr>
														<tr>
															<td>Matchs Comme Remplaçant</td>
															<td>{{ $nbre_remplacant ?? '0' }}</td>
														</tr>
														<tr>
															<td>Passes Décisives</td>
															<td>{{ $stat->passe_d ?? '0' }}</td>
														</tr>
														<tr>
															<td>Tirs</td>
															<td>{{ $stat->tir ?? '0' }}</td>
														</tr>
														<tr>
															<td>Tirs Cadrés</td>
															<td>{{ $stat->tir_cadre ?? '0' }}</td>
														</tr>
														<tr>
															<td>Hors-Jeu</td>
															<td>{{ $stat->hors_jeux ?? '0' }}</td>
														</tr>
														<tr>
															<td>Centres</td>
															<td>{{ $stat->centre ?? '0' }}</td>
														</tr>
														<tr>
															<td>Matchs Gagnés</td>
															<td>...</td>
														</tr>
														<tr>
															<td>Penaltys Marqués</td>
															<td>{{ $stat->panalty_marque ?? '0' }}</td>
														</tr>
														<tr>
															<td>Coups Francs Marqués</td>
															<td>{{ $stat->but_contre_camp ?? '0' }}</td>
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
												<table style="margin-top: 20px;" class="table table-striped">
													<tbody>
														@foreach ($stats as $stat)
														<tr>
															<td>Fautes Commises</td>
															<td>{{ $stat->faute_comise ?? '0' }}</td>
														</tr>
														<tr>
															<td>Ballons Récupérés</td>
															<td>{{ $stat->ballon_recup ?? '0' }}</td>
														</tr>
														<tr>
															<td>Ballons Interceptés</td>
															<td>{{ $stat->ballon_inter ?? '0' }}</td>
														</tr>
														<tr>
															<td>Passes</td>
															<td>{{ $stat->passe_r ?? '0' }}</td>
														</tr>
														<tr>
															<td>Matchs Sans Encaisser</td>
															<td>...</td>
														</tr>
														<tr>
															<td>Buts Encaissés</td>
															<td>{{ $stat->but_encaisse ?? '0' }}</td>
														</tr>
														<tr>
															<td>Buts Contre Son Camp</td>
															<td>{{ $stat->but_contre_camp ?? '0' }}</td>
														</tr>
														<tr>
															<td>Matchs Perdus</td>
															<td>...</td>
														</tr>
														<tr>
															<td>Penaltys Concédés</td>
															<td>{{ $stat->panalty_marque ?? '0' }}</td>
														</tr>
														<tr>
															<td>Penaltys Arrêtés</td>
															<td>{{ $stat->penalty_arrete ?? '0' }}</td>
														</tr>
														<tr>
															<td> </td>
															<td> </td>
														</tr>
														@endforeach
													</tbody>
												</table>
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
