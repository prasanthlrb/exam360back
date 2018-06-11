@extends('include.layout')

@section('body')


			<div class="wraper container-fluid">
				<div class="page-title">
					<h3 class="title">Chapter ({{$title->name}})</h3>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="/addquestion/{{$title->id}}" class="btn btn-success">Add Question   <i class="fa fa-plus"></i></a>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Q No</th>
													<th>Question</th>
													<th>Number of Option</th>
													<th>Answer</th>
													<th>Action</th>
													
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>.1</td>
													<td>System ArchitectSystem ArchitectSystem ArchitectSystem ArchitectSystem ArchitectSystem ArchitectSystem ArchitectSystem Architect</td>
													<td>4</td>
													<td>System Architect</td>
													<td>
														<a href="" >
															<i class="fa fa-edit"></i>										
														</a>

											<a href="" style="padding: 20px">	<i class="fa fa-trash"></i>
</a>
											</td>														
														
											
													
												</tr>
												
												
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- End Row -->

			</div>




 @endsection