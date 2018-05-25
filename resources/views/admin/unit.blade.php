 @extends('include.layout')

@section('body')
<!-- Page Content -->
				<div class="wraper container-fluid">
					<div class="page-title">
						<h3 class="title">Basic Tables</h3>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Responsive Table</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
															<th>Username</th>
															<th>Age</th>
															<th>City</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Mark</td>
															<td>Otto</td>
															<td>@mdo</td>
															<td>20</td>
															<td>Cityname</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Jacob</td>
															<td>Thornton</td>
															<td>@fat</td>
															<td>20</td>
															<td>Cityname</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Larry</td>
															<td>the Bird</td>
															<td>@twitter</td>
															<td>20</td>
															<td>Cityname</td>
														</tr>
														<tr>
															<td>4</td>
															<td>Steve</td>
															<td>Mac Queen</td>
															<td>@steve</td>
															<td>20</td>
															<td>Cityname</td>
														</tr>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End row -->
				</div>
			
					 @endsection
