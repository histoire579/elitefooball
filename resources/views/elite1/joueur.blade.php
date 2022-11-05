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
												<option selected>Selectionner un club</option>
												<option value="1">club 1</option>
												<option value="2">club 2</option>
												<option value="3">club 3</option>
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
														<th scope="col">Joueurs</th>
														<th scope="col">Nationnalié</th>
														<th scope="col">Postes</th>
														<th scope="col">Pieds fort</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>...</td>
														<td>Drapeau ---- Nom</td>
														<th>...</th>
														<th>...</th>
													</tr>
													<tr>
														<td>...</td>
														<td>Drapeau ---- Nom</td>
														<th>...</th>
														<th>...</th>
													</tr>
													<tr>
														<td>...</td>
														<td>Drapeau ---- Nom</td>
														<th>...</th>
														<th>...</th>
													</tr>
													<tr>
														<td>...</td>
														<td>Drapeau ---- Nom</td>
														<th>...</th>
														<th>...</th>
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
