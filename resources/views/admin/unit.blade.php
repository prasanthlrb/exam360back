 @extends('include.layout')
<style>
		.clickable-row {
			/* font-weight: 400; */
			cursor: pointer;
		}
</style>
@section('body')
<div class="wraper container-fluid">
	<div class="page-title"> 
		<h3 class="title">{{$exid->title}}-{{$exlg->name}}</h3> 
	</div>

	<div id="subadd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
					<h4 class="modal-title">Add Subject</h4> 
				</div> 
				<form id="product_form" method="post">
				<div class="modal-body"> 
				
							<div class="row"> 
									<div class="col-md-12"> 
										<div class="form-group"> 
											<label for="field-1 class="control-label">Subject Name</label> 
											<input type="hidden" name="exam_id" value="{{$exid->id}}">
											<input type="text" class="form-control" name="name" placeholder="Subject Name"> 
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
					<button type="button" class="btn btn-danger delsub" onclick="delsub()">Delete </button> 
					<button type="button" class="btn btn-info addsub" onclick="savesub()">Save </button> 
					
				</div> 
			</div> 
		</form>
		</div>
	</div><!-- /.modal -->


	<div id="chapter_add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
					<h4 class="modal-title">Add Chapter</h4> 
				</div> 
				<form id="product_f" method="post">
				<div class="modal-body"> 
				
							<div class="row"> 
									<div class="col-md-12"> 
										<div class="form-group"> 
											<label for="field-1 class="control-label">Chapter Name</label> 
											<input type="text" class="form-control" name="name" placeholder="Subject Name"> 
										</div> 
									</div> 
								</div> 
								
								
								<div class="row"> 
						 
						<div class="col-md-12"> 
								<div class="form-group"> 
						<label for="field-7" class="control-label"> Select Subject</label>
										
											<select id="sub_chap" class="form-control" name="sub_id">
												@foreach($subject as $sub)
												@if($sub->status == '0')
												<option id="sub_chap" value="{{$sub->id}}">{{$sub->name}}</option>
												@endif
												@endforeach
												
                                                </select>
											
										</div>
									</div> 
								</div>
								
					
				</div> 
				<div class="modal-footer"> 
					<button type="button" class="btn btn-white pull-left" data-dismiss="modal">Close</button> 
					<button type="button" class="btn btn-info chapt" onclick="savesub()">Save </button> 
					
				</div> 
			</div> 
		</form>
		</div>
	</div><!-- /.modal -->
	  
	<div class="row">
		
		<!-- Left sidebar -->
		<div class="col-md-3">
			<a href="javascript:void(0);" onclick="subadd()" class="btn btn-purple btn-block">Add Subject</a>
			
			<div class="panel panel-default p-0  m-t-20">
				<div class="panel-body p-0">
					<div class="list-group no-border mail-list subjectTable">
					  <a href="#" class="list-group-item active">Show All <b>({{count($chapter)}})</b> </a>
					  @foreach($subject as $sub)
	
					  <a href="#" class="list-group-item">{{$sub->name}} <b>(
							<?php $countChapter = $chapter->where('sub_id',$sub->id);?>

						 {{$countChapter->count()}}
						 
					  )</b> <i class="fa fa-edit m-r-5 pull-right" onclick="subedit({{$sub->id}})"></i></a>
					 @endforeach
					</div>
				</div>
			</div>
					
			
		</div>
		<!-- End Left sidebar -->
		

		<!-- Right Sidebar -->
		<div class="col-md-9">
			
			<div class="panel panel-default">
					<div class="panel-heading">
							<button type="button" onclick="chapter_add()" class="btn btn-success">Add Chapter   <i class="fa fa-plus"></i></button>
	
					</div>
					
								<table id="datatable" class="table table-striped table-bordered chapterTable">
									<thead>
										<tr>
											<th>S No</th>										
											<th>Subject</th>
											<th>Chapter</th>
											<th>Total Question</th>
											<th>Action</th>
											
										</tr>
									</thead>

									<tbody>
										<?php $x=1; ?>
										@foreach($chapter as $chap)
										<tr>
											<td>{{$x}} </td>
											@foreach($subject as $sub)
											@if($sub->id == $chap->sub_id)
											<td>{{$sub->name}}</td>
											@endif
											@endforeach
											<td data-href='/questionlist/{{$chap->id}}' class='clickable-row'>{{$chap->name}}</td>
											<td>{{$chap->id}}</td>
											<td><a href="javascript:void(0)" onclick="chpedit({{$chap->id}})"><i class="fa fa-edit" style="padding:10px"></i></a> <a href="" onclick="delchap('{{$chap->id}}')"><i class="fa fa-trash clickable-row" style="padding:10px"></i></a><i data-href='/questionlist/{{$chap->id}}' class="fa fa-eye clickable-row" style="padding:10px"></i></td>
											<?php $x++?>
										
										</tr>
										@endforeach
										</tbody>
									</table>

								
		</div> <!-- end Col-9 -->
	
	</div><!-- End row -->


</div> <!-- END Wraper -->
</div>
			
					 @endsection
