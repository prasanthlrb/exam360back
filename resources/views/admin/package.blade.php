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
								<h3 class="panel-title">Add Package <a onclick="refresh(); return false;" href="" class="pull-right"><i class="ion-refresh"></i></a></h3>
							</div>
							<div class="panel-body reloadForm">
								<form class="form-horizontal" id="product_form" method="post" action="/package">
									<div class="form-group">
										<label for="packname" class="col-sm-3 control-label">Pack Name</label>
										<div class="col-sm-9">
											<input type="hidden" name="id">
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
											<button type="button" class="btn btn-info" onClick="saveData()" name="button">
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
											<table class="table product_item">
												<thead>
													<tr>
														<th>#</th>
														<th>Pack Name </th>
														<th>Price </th>
														<th>Sub Scripe</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<?php $x=1?>
												@foreach($pack as $pac)
													<tr class="active">
													<td>{{$x}}</td>
														<td>{{$pac->name}}</td>
														<td>{{$pac->price}}</td>
														<td>{{$pac->subscripe}}</td>
														<td><a onclick="editData('package',{{$pac->id}}); return false;" href="" style="padding:5px"><i class="fa fa-edit"></i></a>
														<a onclick="deleteData('package',{{$pac->id}}); return false;" href="" style="padding:5px"><i class="fa fa-trash"></i></a></td>
													</tr>
													<?php $x++?>
												@endforeach
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