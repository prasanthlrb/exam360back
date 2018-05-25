
@extends('include.layout')

@section('body')

<!-- Page Content -->

			<div class="wraper container-fluid">
				<div class="page-title">
					<h3 class="title">Dashboard </h3>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="portlet">
							<div class="portlet-heading">
								<h3 class="portlet-title text-dark text-uppercase"> Visiters </h3>
								<div class="portlet-widgets">
									<a href="javascript:;" data-toggle="expand"><i class="ion-lightbulb"></i></a>
									<span class="divider"></span>
									<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
									<span class="divider"></span>
									<a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
									<span class="divider"></span>
									<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div id="portlet2" class="panel-collapse collapse in">
								<div class="portlet-body">
									<div id="morris-line-example" style="height: 185px;"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="tile-stats white-bg">
									<div class="status">
										<h3 class="m-t-0 text-info"><i class="fa fa-users"></i> 22+</h3>
										<p>
											News users
										</p>
									</div>
									<div class="chart-inline">
										<span id="dashboard1"></span>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="tile-stats white-bg">
									<div class="status">
										<h3 class="m-t-0 text-danger"><i class="fa fa-envelope-o"></i> 23</h3>
										<p>
											New emails
										</p>
									</div>
									<span id="dashboard2"></span>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="tile-stats white-bg">
									<div class="col-sm-8">
										<div class="status">
											<h3 class="m-t-15 text-success"><i class="fa fa-money"></i> 65</h3>
											<p>
												New sales
											</p>
										</div>
									</div>
									<div class="col-sm-4 m-t-20">
										<span id="dashboard3"></span>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="tile-stats white-bg">
									<div class="col-sm-8">
										<div class="status">
											<h3 class="m-t-15 text-warning"><i class="fa fa-life-ring"></i> 35</h3>
											<p>
												New helps
											</p>
										</div>
									</div>
									<div class="col-sm-4 m-t-20">
										<span id="dashboard4"></span>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="portlet">
							<div class="portlet-heading">
								<h3 class="portlet-title text-dark text-uppercase"> Downloads </h3>
								<div class="portlet-widgets">
									<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
									<span class="divider"></span>
									<a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
									<span class="divider"></span>
									<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div id="portlet1" class="panel-collapse collapse in">
								<div class="portlet-body">
									<div class="row">
										<div class="col-md-8">
											<div id="morris-area-example" style="height: 300px;"></div>
											<div class="row text-center m-t-30 m-b-30">
												<div class="col-sm-4">
													<h4>1.215</h4>
													<small class="text-muted"> Yearly</small>
												</div>
												<div class="col-sm-4">
													<h4>649</h4>
													<small class="text-muted">Monthly</small>
												</div>
												<div class="col-sm-4">
													<h4>320</h4>
													<small class="text-muted">Weekly</small>
												</div>

											</div>
										</div>
										<div class="col-md-4">
											<h4 class="m-b-15 text-uppercase">Download Servers</h4>
											<p class="small">
												Server 0 - <span class="text-purple">70%</span>
											</p>
											<div class="progress">
												<div class="progress-bar progress-bar-purple progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
											</div>
											<p class="small">
												Server 1 - <span class="text-warning">10%</span>
											</p>
											<div class="progress">
												<div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
											</div>
											<p class="small">
												Server 2 - <span class="text-success">55%</span>
											</p>
											<div class="progress">
												<div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
											</div>
											<p class="small">
												Server 3 - <span class="text-info">30%</span>
											</p>
											<div class="progress">
												<div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
											</div>
											<p class="small">
												Server 4 - <span class="text-info">50%</span>
											</p>
											<div class="progress">
												<div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

				</div>


					
				</div>

			</div>
			<!-- End Content -->
 @endsection