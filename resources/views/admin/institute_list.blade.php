 @extends('include.layout')

@section('body')
<!-- Page Content -->

<div class="wraper container-fluid">
	<div class="page-title"> 
		<h3 class="title">Institute Management </h3> 
	</div>
	  
	<div class="row">
	
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body p-t-0">
					<div class="col-md-5">
						<div class="input-group">
							<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
							<span class="input-group-btn">
								<button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</div>
					 <div class="col-md-7">
						 <a class="btn btn-info pull-right" onclick="institute_model()"><i class="fa fa-users"></i> Add Institute</a>
						
					 </div>
				</div>
			</div>
		</div>
	
	</div> <!-- End row -->

	<div id="institute_management" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
					<h4 class="modal-title">Add Institute</h4> 
				</div> 
				<form id="product_form" method="post">
				<div class="modal-body"> 
				
							<div class="row"> 
									<div class="col-md-12"> 
										<div class="form-group"> 
											<label for="field-1 class="control-label">Institute Name</label> 
											<input type="text" class="form-control" name="name" placeholder="Institute Name"> 
										</div> 
									</div> 
								</div> 
								<div class="row"> 
						<div class="col-md-6"> 
							<div class="form-group"> 
								<label for="field-2" class="control-label">Mobile Number</label> 
								<input type="text" class="form-control" name="mobile" placeholder="Mobile Number"> 
							</div> 
						</div> 
						<div class="col-md-6"> 
							<div class="form-group"> 
								<label for="field-3" class="control-label">Contact Person</label> 
								<input type="text" class="form-control" name="person" placeholder="Contact Person"> 
							</div> 
						</div> 
					</div> 
								<div class="row"> 
						<div class="col-md-6"> 
							<div class="form-group"> 
								<label for="field-4" class="control-label">E-Mail</label> 
								<input type="text" class="form-control" name="email" placeholder="E-Mail"> 
							</div> 
						</div> 
						<div class="col-md-6"> 
							<div class="form-group"> 
								<label for="field-5" class="control-label">Password</label> 
								<input type="text" class="form-control" name="password" placeholder="Password"> 
							</div> 
						</div> 
					</div> 
								<div class="row"> 
						<div class="col-md-6"> 
							<div class="form-group"> 
								<label for="field-6" class="control-label">GSTIN</label> 
								<input type="text" class="form-control" name="gst" placeholder="GSTIN"> 
							</div> 
						</div> 
						<div class="col-md-6"> 
								<div class="form-group"> 
						<label for="field-7" class="control-label"> Select Package</label>
										
											<select class="form-control" name="package">
												@foreach($pack as $pac)
												<option value={{$pac->id}}>{{$pac->name}}</option>
												@endforeach
                                                </select>
											
										</div>
									</div> 
								</div>
								
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="form-group no-margin"> 
								<label for="field-8" class="control-label">Address</label> 
								<textarea class="form-control"  placeholder="Address" style="text-align:left" name="address"></textarea> 
							</div> 
						</div> 
					</div> 
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-white pull-left" data-dismiss="modal">Close</button> 
					<button type="button" class="btn btn-info" onclick="inst_pro()">Save </button> 
					<button type="button" class="btn btn-success">Save & Send</button> 
				</div> 
			</div> 
		</form>
		</div>
	</div><!-- /.modal -->
	<div class="row">
	<div class="list_ins">	
		@foreach($inst as $ins)
		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body p-t-10">
					<div class="media-main">
						<a class="pull-left" href="#">
							<img class="thumb-lg img-circle bx-s" src="assets/img/avatar-2.jpg" alt="">
						</a>
						<div class="pull-right btn-group-sm">
							<a href="#" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
								<i class="fa fa-pencil"></i>
							</a>
							<a href="#" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
								<i class="fa fa-close"></i>
							</a>
						</div>
						<div class="info">
							<h4>{{$ins->name}}</h4>
							<p class="text-muted">
								<?php
								 
								?>
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr/>
					<ul class="social-links list-inline p-b-10">
						<li>
							<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook">50/1000</a>
						</li>
						<li>
							<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
						</li>
						<li>
							<a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
						</li>
					</ul>
				</div> <!-- panel-body -->
			</div> <!-- panel -->
		</div> <!-- end col -->

		@endforeach
	</div>
	</div>
	

	<div class="row">
		<div class="col-sm-12">
			<ul class="pagination pull-right">
				<li>
				  <a href="#" aria-label="Previous">
					<i class="fa fa-angle-left"></i>
				  </a>
				</li>
				<li><a href="#">1</a></li>
				<li class="active"><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="disabled"><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
				  <a href="#" aria-label="Next">
					<i class="fa fa-angle-right"></i>
				  </a>
				</li>
			</ul>
		</div>
	</div>
	</div>

</div> <!-- END Wraper -->
			 @endsection