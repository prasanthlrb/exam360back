@extends('include.layout')

@section('body')
<!-- Page Content -->
<div class="wraper container-fluid">
					<div class="page-title">
						<h3 class="title">Package Details</h3>
                    </div>
                    
                    <div class="row">
<!-- Horizontal form -->
<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Add Package</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form" method="post" action="/package">
									<div class="form-group">
										<label for="packname" class="col-sm-3 control-label">Pack Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="name" id="packname" placeholder="Pack Name">
										</div>
									</div>
									<div class="form-group">
										<label for="price" class="col-sm-3 control-label">Price </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="price" id="price" placeholder="Price">
										</div>
									</div>
									<div class="form-group">
										<label for="subscripe" class="col-sm-3 control-label">SubScripe</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="subscripe" id="subscripe" placeholder="Sub Scripe">
										</div>
									</div>
									
									<div class="form-group m-b-0">
										<div class="col-sm-offset-3 col-sm-9">
											<button type="submit" class="btn btn-info">
												Save Pack
											</button>
										</div>
									</div>
								</form>
							</div>
							<!-- panel-body -->
						</div>
						<!-- panel -->
					</div>
					<!-- col -->

						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Package List</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<table class="table">
												<thead>
													<tr>
														<th>#</th>
														<th>Pack Name </th>
														<th>Price </th>
														<th>Sub Scripe</th>
													</tr>
												</thead>
												<tbody>
													<tr class="active">
														<td>1</td>
														<td>Column content</td>
														<td>10000</td>
														<td>100</td>
													</tr>
													<tr class="success">
														<td>3</td>
														<td>Column content</td>
														<td>15000</td>
														<td>150</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Column content</td>
														<td>10000</td>
														<td>100</td>
													</tr>
													<tr class="danger">
														<td>9</td>
														<td>Column content</td>
														<td>10000</td>
														<td>100</td>
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
@endsection