 @extends('include.layout')

@section('body')
<div class="wraper container-fluid">
	<div class="page-title"> 
		<h3 class="title">Subject / Unit</h3> 
	</div>
	  
	<div class="row">
		
		<!-- Left sidebar -->
		<div class="col-md-3">
			<a href="email-compose.html" class="btn btn-purple btn-block">Add Subject</a>
			
			<div class="panel panel-default p-0  m-t-20">
				<div class="panel-body p-0">
					<div class="list-group no-border mail-list">
					  <a href="#" class="list-group-item active">Show All <b>(8)</b> </a>
					  <a href="#" class="list-group-item">physics <b>(8)</b> <i class="fa fa-edit m-r-5 pull-right"></i><i class="fa fa-trash m-r-5 pull-right"></i></a>
					 
					</div>
				</div>
			</div>
					
			
		</div>
		<!-- End Left sidebar -->
		

		<!-- Right Sidebar -->
		<div class="col-md-9">
			
			<div class="panel panel-default">
					<div class="panel-heading">
							<button type="button" class="btn btn-success">Add Chapter / Unit  <i class="fa fa-plus"></i></button>
	
					</div>
					
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>S No</th>
										
											<th>Chapter</th>
											<th>Unit</th>
											<th>Total Question</th>
											
										</tr>
									</thead>

									<tbody>
										<tr data-href='url://' class='clickable-row'>
											<td>1 </td>
											<td>System Architect</td>
											<td>Edinburgh</td>
											<td>61</td>
										
										</tr>
										<tr>
											<td>2 </td>
											<td>Accountant</td>
											<td>Tokyo</td>
											<td>63</td>
										
										</tr>
										<tr>
											<td>3 </td>
											<td>Junior Technical Author</td>
											<td>San Francisco</td>
											<td>66</td>
											
										</tr></tbody>
									</table>

								
		</div> <!-- end Col-9 -->
	
	</div><!-- End row -->


</div> <!-- END Wraper -->
</div>
			
					 @endsection
