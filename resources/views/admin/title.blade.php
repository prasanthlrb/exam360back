 @extends('include.layout')

@section('body')
<!-- Page Content -->
				<div class="wraper container-fluid">
					<div class="page-title">
						<h3 class="title">Exam Management</h3>
					</div>
					
					<div id="product-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
					<h4 class="modal-title">Add Exams</h4> 
				</div> 
				<form id="product_f" method="post" action="/extitle">
				<div class="modal-body"> 
				
							<div class="row"> 
									<div class="col-md-12"> 
										<div class="form-group"> 
											<label for="field-1 class="control-label">Exam Name</label> 
											<input type="text" class="form-control" name="title" placeholder="Exam Name"> 
										</div> 
									</div> 
								</div> 
								
								
								<div class="row"> 
						 
						<div class="col-md-12"> 
								<div class="form-group"> 
						<label for="field-7" class="control-label"> Select Language</label>
										
											<select id="lansel" class="form-control" name="language_id">
												@foreach($language as $lan)
											
												<option id="lansel" value={{$lan->id}}>{{$lan->name}}</option>
												@endforeach
                                                </select>
											
										</div>
									</div> 
								

								<div class="col-md-12"> 
								<div class="form-group"> 
						<label for="field-7" class="control-label"> Status</label>
										
											<select class="form-control" name="status">
											
												<option value='0'>Visible</option>
												<option value='1'>Hide</option>
												
                                                </select>
											
										</div>
									</div> 
								</div>
								
					
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-white pull-left" data-dismiss="modal">Close</button> 
					<button type="button" id="titleform" class="btn btn-info" onclick="saveform()">Save </button> 
					
				</div> 
			</div> 
		</form>
		</div>
	</div><!-- /.modal -->


	<div id="language" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
					<h4 class="modal-title">Add Language</h4> 
				</div> 
				<form id="product_form" method="post" action="/exlan">
				<div class="modal-body"> 
				
							<div class="row"> 
									<div class="col-md-12"> 
										<div class="form-group"> 
											<label for="field-1 class="control-label">Language</label> 
											<input type="text" class="form-control" name="name" placeholder="Language"> 
										</div> 
									</div> 
								</div> 
								
								
								<div class="row"> 
						 
						<div class="col-md-12"> 
								<div class="form-group"> 
						<label for="field-7" class="control-label"> Status</label>
										
											<select class="form-control" name="status">
											
												<option value='0'>Visible</option>
												<option value='1'>Hide</option>
												
                                                </select>
											
										</div>
									</div> 
								</div>
								
					
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-white pull-left" data-dismiss="modal">Close</button> 
					<button type="button" id="dellan" class="btn btn-danger" onclick="delform()">Delete </button> 
					<button type="button" class="btn btn-info" id="languageForm" onclick="saveform()">Save </button> 

					
				</div> 
			</div> 
		</form>
		</div>
	</div><!-- /.modal -->

					<!-- List Groups -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-6">
											<h5>List of Exams <a href="javascript:void(0);" onclick="examadd()" id="exam_title"><span class="label label-success">Create Exam <i class="fa fa-plus"></i></span></a></h5>
											<ul class="list-group product_item">
												@foreach($title as $tit)
												<li class="list-group-item" style="">
													<a href="javascript:void(0)" class="pull-right" onclick="deletitle('{{$tit->id}}')" style="padding-left:5px"><span class="badge bg-danger"><i class="fa fa-trash"></i></span></a>
													<a href="javascript:void(0)" class="pull-right" onclick="edittit('{{$tit->id}}')" style="padding-left:5px"><span class="badge bg-primary"><i class="fa fa-edit"></i></span></a>
													<a href="javascript:void(0)" class="pull-right" style="padding-left:5px"><span class="badge bg-success">14</span></a>
													<a href="/subject/{{$tit->id}}">{{$tit->title}} 
															@foreach($language as $lan)
															@if($lan->id == $tit->language_id)
															({{$lan->name}})
															@endif
															@endforeach
													</a>
												</li>
												@endforeach
											</ul>
										</div>
	
										<div class="col-sm-6">
											<h5>List of Language  <a href="javascript:void(0);" onclick="language()" id="exam_title"><span class="label label-success">Create Language <i class="fa fa-plus"></i></span></a></h5>
											<div class="list-group product_i">
												@foreach($language as $lan)
												<a href="#" class="list-group-item" onclick="lanedit('{{$lan->id}}')"> {{$lan->name}} </a>
												@endforeach
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
