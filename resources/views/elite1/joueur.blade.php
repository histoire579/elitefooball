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

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">JOUEURS</h4>
								<form action="{{ route('joueur_by_club_one') }}" method="get">
									@csrf
									<div class="row mb-6">
										<div class="col-md-4">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="saison" id="saison" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
												</select>
											</div>
										</div>
	
										<div class="col-md-4">
											<div class="form-select-wrapper mb-4">
												<select class="form-select" name="club" id="club" aria-label="Default select example">
													<option selected>Selectionner un club</option>
													@foreach ($detail_competition_saisons as $detail_competition_saison)
														<option value="{{ $detail_competition_saison->club->id }}">{{ $detail_competition_saison->club->nom }}</option>
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
													<th scope="col">Joueurs</th>
													<th scope="col">Nationalité</th>
													<th scope="col">Postes</th>
													<th scope="col">Dorssad</th>
													<th scope="col">Pieds fort</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($detail_club_saisons as $detail_club_saison)
													<tr>
														<td><img src="{{ asset($detail_club_saison->joueur->photo) }}" style="height: 50px; width: 50px;" alt="">  {{ $detail_club_saison->joueur->nom }}</td>
														<td><img src="{{ asset($detail_club_saison->joueur->drapeau) }}" style="height: 50px; width: 50px;" alt="">  {{ $detail_club_saison->joueur->nationalite }}</td>
														<td>{{ $detail_club_saison->poste->libelle }}</th>
														<td>{{ $detail_club_saison->dorssad }}</td>
														<td>{{ $detail_club_saison->joueur->pied_fort }}</td>
														<td><a href="{{ route('detail_joueur_elite_one', [$detail_club_saison->saison_id, $detail_club_saison->joueur_id]) }}" class="btn btn-primary" style="height: 5px;">Detail</a></td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<!--/.row -->
							</div>
						</div>
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
