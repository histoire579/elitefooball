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

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CLASSEMENT GENERAL</h4>
								<form action="">
									@csrf
									<div class="row mb-6">
										<div class="col-md-3">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" aria-label="Default select example" id="form-saison-general">
													<option selected>Selectionner une saison</option>
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" aria-label="Default select example" id="form-journee-general">
													<option selected>Selectionner une journée</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" aria-label="Default select example" id="form-phase-general">
													<option selected>Selectionner une phase</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" aria-label="Default select example">
													<option selected value="Général">Général</option>
													<option value="Dom">Dom</option>
													<option value="Ext">Ext</option>
													<option value="1ere Mt">1ere Mt</option>
													<option value="2e Mt">2e Mt</option>
												</select>
											</div>
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn btn-primary">Rechercher</button>
										</div>
									</div>
								</form>
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
													@php
														$rang = 0;
													@endphp
													@foreach ($classement as $item)
														{{-- @dd($item) --}}
														@php
															$rang++;
														@endphp
														<tr>
															<th scope="row">{{ $rang }}</th>
															<td><i class="uil uil-arrow-up"></i></td>
															<td><img class="avatar w-10" src="{{ $item['club']['photo'] ?? '' }}"
																	alt="" />{{ $item['club']['nom'] ?? '' }}
															</td>
															<th>{{ $item['point'] ?? '' }}</th>
															<td>{{ $item['total_match'] ?? '' }}</td>
															<td>{{ $item['match_gagnes'] ?? '' }}</td>
															<td>{{ $item['match_null'] ?? '' }}</td>
															<td>{{ $item['match_perdu'] ?? '' }}</td>
															<th>{{ $item['total_but_marque'] ?? '' }}</th>
															<td>{{ $item['total_but_encaisse'] ?? '' }}</td>
															<td>{{ $item['total_but_marque'] - $item['total_but_encaisse'] ?? '' }}</td>
															<td>
																@foreach ($item['forme'] as $item)
																	<span
																		class="badge {{ $item['statut_match'] == 'G' ? 'bg-success' : ($item['statut_match'] == 'N' ? 'bg-primary' : 'bg-danger') }}">
																	</span>
																@endforeach
															</td>
														</tr>
													@endforeach

												</tbody>
											</table>
										</div>
										<!--/.card-body -->

									</div>
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
												@foreach ($saisons as $saison)
													<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
												@endforeach
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
													@php
														$rang = 0;
													@endphp
													@foreach ($classement_buteurs as $item)
														@php
															$rang++;
														@endphp
														<tr>
															<th scope="row">{{ $rang }}</th>
															<td>{{ $item->nom ?? '' }}</td>
															<td>{{ $item->nomclub ?? '' }}</td>
															<td>{{ $item->but_marque ?? '' }}</td>
															<td>{{ $item->penelty_marque ?? '' }}</td>
															<th>{{ $item->matchs_afferents ?? '' }}</th>
															<td>{{ $item->minute_jouer ?? '' }}</td>
															<td>{{ $item->but_marque * 3 ?? '' }}</td>
														</tr>
													@endforeach
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
												@foreach ($saisons as $saison)
													<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
												@endforeach
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
													@php
														$rang = 0;
													@endphp
													@foreach ($classement_passeurs as $item)
														@php
															$rang++;
														@endphp
														<tr>
															<th scope="row">{{ $rang }}</th>
															<td>{{ $item->nom ?? '' }}</td>
															<td>{{ $item->nomclub ?? '' }}</td>
															<td>{{ $item->passe ?? '' }}</td>
															<th>{{ $item->matchs_afferents ?? '' }}</th>
															<td>{{ $item->minute_jouer ?? '' }}</td>
														</tr>
													@endforeach
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

@section('extra-js')
	<script type="text/javascript">
		$('#form-saison-general').change(function(e) {
			var saison_id = $(this).children("option:selected").val();
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
				},
				type: "GET",
				url: "{{ route('get_journee_et_phase_by_saison_ajax') }}",
				data: {
					'saison_id': saison_id,
				},
				dataType: "Json",
				success: function(data) {
					if ($.isEmptyObject(data.errors) && $.isEmptyObject(data.error)) {
						//success
						$("#form-journee-general").text('');
						$("#form-phase-general").text('');
						$("#form-journee-general").append(
							'<option selected>Selectionner une journée</option>'
						);
						$("#form-phase-general").append(
							'<option selected>Selectionner une phase</option>'
						);
						if (data.journees != null && data.journees.length > 0) {
							data.journees.forEach(element => {
								$("#form-journee-general").append(
									'<option value="' + element.id + '">' + element.libelle +
									'</option>'
								);
							});
						}
						if (data.phases != null && data.phases.length > 0) {
							data.phases.forEach(element => {
								$("#form-phase-general").append(
									'<option value="' + element.id + '">' + element.libelle +
									'</option>'
								);
							});
						}
					}
				},
				error: function(data) {
					//TODO : travailler sur l'affichage des messages d'erreur
				}
			});
		});
	</script>
@endsection
