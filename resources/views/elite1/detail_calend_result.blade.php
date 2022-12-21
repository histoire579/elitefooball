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
								<span>LISTE DES JOUEURS</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>STATS DU MATCH</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">FEUILLE DE MATCH</h4>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
									<div class="col-lg-8">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<thead style="text-align: center;">
														<br>
														<tr>
															<th scope="col">Date: {{ $match->date }}</th>
															<th scope="col">|</th>
															<th scope="col">Lieu: {{ $match->stade->nom }}</th>
															<th scope="col">|</th>
															<th scope="col">Journée: {{ $match->journee->libelle }}</th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"><img src="{{ asset($match->club1->logo) }}" style="height: 50px; width: 50px;" alt=""></th>
															<th scope="col">{{ $match->club1->nom }}</th>
															<th scope="col">{{ $match->nbre_but_club1 }}<strong> Score </strong>{{ $match->nbre_but_club2 }}</th>
															<th scope="col">{{ $match->club2->nom }}</th>
															<th scope="col"><img src="{{ asset($match->club2->logo) }}" style="height: 50px; width: 50px;" alt=""></th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"></th>
															<th scope="col"></th>
															<th scope="col">Heure de début: {{ $match->heure }}</th>
															<th scope="col"></th>
															<th scope="col"></th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col">Arbitre Central: {{ $match->arbitre1->nom }}</th>
															<th scope="col">Assistant 1: {{ $match->arbitre2->nom }}</th>
															<th scope="col">|</th>
															<th scope="col">Assistant 2 : {{ $match->arbitre3->nom }}</th>
															<th scope="col">4e Arbitre : {{ $match->arbitre4->nom }}</th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"></th>
															<th scope="col"></th>
															<th scope="col"><strong>Butteurs</strong></th>
															<th scope="col"></th>
															<th scope="col"></th>
														</tr>
													</thead>
													<tbody style="text-align: center;">
														@foreach($buteurs_match_club1 as $buteur1)
															@foreach($buteurs_match_club2 as $buteur2)
															<tr>
																<td>{{ $buteur1->nom }}</td>
																<td><img src="{{ asset($buteur1->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td></td>
																<td><img src="{{ asset($buteur2->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td>{{ $buteur2->nom }}</td>
															</tr>
															@endforeach
														@endforeach
													</tbody>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"></th>
															<th scope="col"></th>
															<th scope="col"><strong>Passeurs décisifs</strong></th>
															<th scope="col"></th>
															<th scope="col"></th>
														</tr>
													</thead>
													<tbody style="text-align: center;">
														@foreach($passeurs_match_club1 as $passeur1)
															@foreach($passeurs_match_club2 as $passeur2)
															<tr>
																<td>{{ $passeur1->nom }}</td>
																<td><img src="{{ asset($passeur1->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td></td>
																<td><img src="{{ asset($passeur2->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td>{{ $passeur2->nom }}</td>
															</tr>
															@endforeach
														@endforeach
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-4">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<h4 class="display-8 mb-3">Homme du match</h4>
												<table>
													@foreach($homme_match as $homme)
													<tbody>
														<tr>
															<td><img src="{{ asset($homme->photo) }}" alt=""></td>
														</tr>
														<tr>
															<td>Nom du joueur : {{ $homme->nom }}</td>
														</tr>
														<tr>
															<td>Club du joueur : {{ $homme->club }}</td>
														</tr>
													</tbody>
													@endforeach
												</table>
												<br>
												<h4 class="display-8 mb-3">Infos du match</h4>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>...</td>
														</tr>
														<tr>
															<td>...</td>
														</tr>
														<tr>
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
									
									<div class="col-lg-6">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<label for="">Entrants</label>
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Nom(s)</th>
															<th>Dorssad</th>
														</tr>
													</thead>
													<tbody>
														@foreach($entrant_club1 as $entrant1)
														<tr>
															<td>{{ $entrant1->nom }}</td>
															<td>{{ $entrant1->dorssad }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<label for="">Remplaçants</label>
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Nom(s)</th>
															<th>Dorssad</th>
														</tr>
													</thead>
													<tbody>
														@foreach($remplaçant_club1 as $remplaçant1)
														<tr>
															<td>{{ $remplaçant1->nom }}</td>
															<td>{{ $remplaçant1->dorssad }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<label for="">Caoch</label>
												<table class="table table-striped">
													<tbody>
														@foreach($coach_club1 as $coach1)
														<tr>
															<td>{{ $coach1->coach_p }}</td>
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
												<label for="">Entrants</label>
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Nom(s)</th>
															<th>Dorssad</th>
														</tr>
													</thead>
													<tbody>
														@foreach($entrant_club2 as $entrant2)
														<tr>
															<td>{{ $entrant2->nom }}</td>
															<td>{{ $entrant2->dorssad }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<label for="">Remplaçants</label>
												<table class="table table-striped">
													<thead>
														<tr>
															<th>Nom(s)</th>
															<th>Dorssad</th>
														</tr>
													</thead>
													<tbody>
														@foreach($remplaçant_club2 as $remplaçant2)
														<tr>
															<td>{{ $remplaçant2->nom }}</td>
															<td>{{ $remplaçant2->dorssad }}</td>
														</tr>
														@endforeach
													</tbody>
												</table>
												<label for="">Caoch</label>
												<table class="table table-striped">
													<tbody>
														@foreach($coach_club2 as $coach2)
														<tr>
															<td>{{ $coach2->coach_p }}</td>
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
								<!--/.row -->
							</div>
						</div>
						<div class="tab-pane fade" id="tab1-2">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">FEUILLE DE MATCH</h4>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
									<div class="col-lg-8">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<thead style="text-align: center;">
														<br>
														<tr>
															<th scope="col">Date: {{ $match->date }}</th>
															<th scope="col">|</th>
															<th scope="col">Lieu: {{ $match->stade->nom }}</th>
															<th scope="col">|</th>
															<th scope="col">Journée: {{ $match->journee->libelle }}</th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"><img src="{{ asset($match->club1->logo) }}" style="height: 50px; width: 50px;" alt=""></th>
															<th scope="col">{{ $match->club1->nom }}</th>
															<th scope="col">{{ $match->nbre_but_club1 }}<strong> Score </strong>{{ $match->nbre_but_club2 }}</th>
															<th scope="col">{{ $match->club2->nom }}</th>
															<th scope="col"><img src="{{ asset($match->club2->logo) }}" style="height: 50px; width: 50px;" alt=""></th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"></th>
															<th scope="col"></th>
															<th scope="col">Heure de début: {{ $match->heure }}</th>
															<th scope="col"></th>
															<th scope="col"></th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col">Arbitre Central: {{ $match->arbitre1->nom }}</th>
															<th scope="col">Assistant 1: {{ $match->arbitre2->nom }}</th>
															<th scope="col">|</th>
															<th scope="col">Assistant 2 : {{ $match->arbitre3->nom }}</th>
															<th scope="col">4e Arbitre : {{ $match->arbitre4->nom }}</th>
														</tr>
													</thead>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"></th>
															<th scope="col"></th>
															<th scope="col"><strong>Butteurs</strong></th>
															<th scope="col"></th>
															<th scope="col"></th>
														</tr>
													</thead>
													<tbody style="text-align: center;">
														@foreach($buteurs_match_club1 as $buteur1)
															@foreach($buteurs_match_club2 as $buteur2)
															<tr>
																<td>{{ $buteur1->nom }}</td>
																<td><img src="{{ asset($buteur1->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td></td>
																<td><img src="{{ asset($buteur2->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td>{{ $buteur2->nom }}</td>
															</tr>
															@endforeach
														@endforeach
													</tbody>
												</table>
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th scope="col"></th>
															<th scope="col"></th>
															<th scope="col"><strong>Passeurs décisifs</strong></th>
															<th scope="col"></th>
															<th scope="col"></th>
														</tr>
													</thead>
													<tbody style="text-align: center;">
														@foreach($passeurs_match_club1 as $passeur1)
															@foreach($passeurs_match_club2 as $passeur2)
															<tr>
																<td>{{ $passeur1->nom }}</td>
																<td><img src="{{ asset($passeur1->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td></td>
																<td><img src="{{ asset($passeur2->photo) }}" style="height: 50px; width: 50px;" alt=""></td>
																<td>{{ $passeur2->nom }}</td>
															</tr>
															@endforeach
														@endforeach
													</tbody>
												</table>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->

									<div class="col-lg-4">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<div class="card-body">
													<h4 class="display-8 mb-3">Homme du match</h4>
                                                    <table>
														@foreach($homme_match as $homme)
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset($homme->photo) }}" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nom du joueur : {{ $homme->nom }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Club du joueur : {{ $homme->club }}</td>
                                                            </tr>
                                                        </tbody>
														@endforeach
                                                    </table>
													<br>
													<h4 class="display-8 mb-3">Infos du match</h4>
													<table class="table table-striped">
														<tbody>
															<tr>
                                                                <td>...</td>
                                                            </tr>
															<tr>
                                                                <td>...</td>
                                                            </tr>
															<tr>
                                                                <td>...</td>
                                                            </tr>
														</tbody>
													</table>
													<!--/.card-body -->
												</div>
												<!--/.card-body -->
											</div>
										</div>
										<!--/.row -->
									</div>
									<!--/column -->
									
									<div class="col-lg-12">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												<table class="table table-striped">
													<thead style="text-align: center;">
														<tr>
															<th></th>
															<th>Stats du match</th>
															<th></th>
														</tr>
													</thead>
													<tbody style="text-align: center;">
														@foreach($detail_match as $item)
														<tr>
															<td>{{ $item->possession_club1 }}</td>
															<td>Possession (%)</td>
															<td>{{ $item->possession_club1 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_tir_club1 }}</td>
															<td>Tirs</td>
															<td>{{ $item->nbre_tir_club2 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_tir_cadre_club1 }}</td>
															<td>Tirs Cadres</td>
															<td>{{ $item->nbre_tir_cadre_club2 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_corner_club1 }}</td>
															<td>Corners</td>
															<td>{{ $item->nbre_corner_club2 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_hors_jeu_club1 }}</td>
															<td>Hors-Jeu</td>
															<td>{{ $item->nbre_hors_jeu_club2 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_carton_jaune_club1 }}</td>
															<td>Cartons Jaunes</td>
															<td>{{ $item->nbre_carton_jaune_club2 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_carton_rouge_club1 }}</td>
															<td>Cartons Rouges</td>
															<td>{{ $item->nbre_carton_rouge_club2 }}</td>
														</tr>
														<tr>
															<td>{{ $item->nbre_faute_club1 }}</td>
															<td>Fautes Commises</td>
															<td>{{ $item->nbre_faute_club2 }}</td>
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
