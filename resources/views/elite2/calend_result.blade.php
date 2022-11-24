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
								<span>CALENDRIER</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
								<i class="uil uil-shield-exclamation pe-1"></i>
								<span>RESULTATS</span>
							</a>
						</li>
					</ul>
					<!-- /.nav-tabs -->

					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab1-1">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">CALENDRIER</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
                                        <div class="col-md-3">
                                            <div class="form-select-wrapper mb-4">
                                                <select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
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
                                                <select class="form-select" name="phase_id" id="phase_id" aria-label="Default select example">
													<option value="">Selectionner une phase</option>
													@foreach ($phases as $phase)
														<option value="{{ $phase->id }}">{{ $phase->libelle }}</option>
													@endforeach
												</select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary">Rechercher</button>
                                        </div>
                                    </div>
								</form>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
									<div class="col-lg-8">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												@foreach ($calendiers as $calendier)
												<label for="">{{ $calendier->date }}</label>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>{{ $calendier->club1->nom }} <img src="{{ asset($calendier->club1->logo) }}" style="height: 50px; width: 50px;" alt=""> <strong>{{ $calendier->heure }}</strong> <img src="{{ asset($calendier->club2->logo) }}" style="height: 50px; width: 50px;" alt=""> {{ $calendier->club2->nom }}</td>
															<td>{{ $calendier->stade->nom }}</td>
														</tr>
													</tbody>
												</table>
												@endforeach
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
													<h4 class="display-8 mb-3">Meilleur buteur</h4>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset('dist\assets\img\avatars\t1.jpg') }}" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nombre de but(s) : </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nom du joueur : </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<br>
													<h4 class="display-8 mb-3">Forme des 5 premiers</h4>
													<table class="table table-striped">
														<thead>
															<tr>
																<th scope="col">Rang</th>
																<th scope="col">Forme</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>...</td>
															</tr>
															<tr>
																<td>2</td>
																<td>...</td>
															</tr>
															<tr>
																<td>3</td>
																<td>...</td>
															</tr>
															<tr>
																<td>4</td>
																<td>...</td>
															</tr>
															<tr>
																<td>5</td>
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
								</div>
								<!--/.row -->
							</div>
						</div>
						<div class="tab-pane fade" id="tab1-2">
							<div class="col-md-12">
								<h4 class="display-6 mb-8 mt-6 text-center">RESULTATS</h4>
								<form action="" method="get">
									@csrf
									<div class="row mb-6">
                                        <div class="col-md-3">
                                            <div class="form-select-wrapper mb-4">
                                                <select class="form-select" name="saison_id" id="saison_id" aria-label="Default select example">
													@foreach ($saisons as $saison)
														<option value="{{ $saison->id }}">{{ $saison->libelle }}</option>
													@endforeach
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
                                                <select class="form-select" name="phase_id" id="phase_id" aria-label="Default select example">
													<option value="">Selectionner une phase</option>
													@foreach ($phases as $phase)
														<option value="{{ $phase->id }}">{{ $phase->libelle }}</option>
													@endforeach
												</select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary">Rechercher</button>
                                        </div>
                                    </div>
								</form>
								<div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17">
									<div class="col-lg-8">
										<div class="row gy-3 gx-xl-8">
											<div class="card table-responsive">
												@foreach ($resultats as $resultat)
												<label for="">{{ $resultat->date }}</label>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>{{ $resultat->club1->nom }} <img src="{{ asset($resultat->club1->logo) }}" style="height: 50px; width: 50px;" alt=""> <strong> {{ $resultat->nbre_but_club1 }} -- {{ $resultat->nbre_but_club2 }} </strong> <img src="{{ asset($resultat->club2->logo) }}" style="height: 50px; width: 50px;" alt=""> {{ $resultat->club2->nom }}</td>
															<td>{{ $resultat->stade->nom }}</td>
														</tr>
													</tbody>
												</table>
												@endforeach
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
													<h4 class="display-8 mb-3">Meilleur buteur</h4>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="{{ asset('dist\assets\img\avatars\t1.jpg') }}" alt=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nombre de but(s) : </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nom du joueur : </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<br>
													<h4 class="display-8 mb-3">Forme des 5 premiers</h4>
													<table class="table table-striped">
														<thead>
															<tr>
																<th scope="col">Rang</th>
																<th scope="col">Forme</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>...</td>
															</tr>
															<tr>
																<td>2</td>
																<td>...</td>
															</tr>
															<tr>
																<td>3</td>
																<td>...</td>
															</tr>
															<tr>
																<td>4</td>
																<td>...</td>
															</tr>
															<tr>
																<td>5</td>
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
