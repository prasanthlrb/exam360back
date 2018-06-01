 @extends('include.layout')

@section('body')
<!-- Page Content -->
				<div class="wraper container-fluid">
					<div class="page-title">
						<h3 class="title">Exam Management</h3>
					</div>
					

					<!-- List Groups -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6">
											<h5>List of Exams <a href="javascript:void(0);" id="exam_title"><span class="label label-success">Create Exam <i class="fa fa-plus"></i></span></a></h5>
											<ul class="list-group">
												<li class="list-group-item" style="">
													<a href="" class="pull-right" style="padding-left:5px"><span class="badge bg-danger"><i class="fa fa-trash"></i></span></a>
													<a href="" class="pull-right" style="padding-left:5px"><span class="badge bg-primary"><i class="fa fa-edit"></i></span></a>
													<a href="" class="pull-right" style="padding-left:5px"><span class="badge bg-success">14</span></a>
													<a href="">NEET</a>
												</li>
												
											</ul>
										</div>
	
										<div class="col-md-6">
											<h5>List of Language  <a href="javascript:void(0);" id="exam_title"><span class="label label-success">Create Language <i class="fa fa-plus"></i></span></a></h5>
											<div class="list-group">
												<a href="#" class="list-group-item active"> English </a>
												
											</div>
											<!-- list-group -->
										</div>
										<!-- col -->
									</div>
									<!-- end row -->
								</div>
								<!-- panel-body -->
							</div>
							<!-- panel -->
						</div>
						<!-- col -->
					</div>
					<!-- End row -->
				</div>
				
					 @endsection
