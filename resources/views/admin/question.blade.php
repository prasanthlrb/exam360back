@extends('include.layout')

@section('body')


<div class="wraper container-fluid">
	<div class="page-title">
		<h3 class="title" id="tit-test">Add Questions</h3>
	</div>

<form action="/savequestion" method="post">

 <input type="hidden" value="{{ $id }}" name="chapter_id" id="chapter_id">

<table id="Question_table">
	<tbody>
<?php
$arrayNumber = 0;
for($x = 1; $x <= 1; $x++) { ?>

<tr value="<?php echo $x; ?>" id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">

<div class="row">

	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Question 1</h3>
			</div>
			<div class="panel-body">
				<!-- <div class="summernote" id="summernote" name="question">
				</div> -->
				<textarea id="question" name="question" class="summernote"></textarea>
			</div>
		</div>
	</div>

</div>
<!-- End row -->
<div class="row">

<?php
for($x1 = 1; $x1 <= 4; $x1++) { ?>
	<div class="col-sm-6" >
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo $x1; ?> option 
					<button type="button" class="btn btn-success btn-custom m-b-5">
                	Correct Answer
                	</button>
                	<i class="fa fa-close fa-2x text-danger pull-right"></i>
            	</h3>
			</div>
			<div class="panel-body">
				<textarea id="option<?php echo $x1; ?>" name="option<?php echo $x1; ?>" class="summernote"></textarea>
			</div>
		</div>
	</div>
<?php } ?>
				
                    <div class="col-sm-4 col-sm-offset-4">
                        <button type="button" class="btn btn-block btn-lg btn-info">
                            <i class="fa fa-plus fa-1x"></i> Add More options
                        </button>
                    </div>

</div>
<!-- End row -->

</tr>
<?php } ?>
	</tbody>
</table>

<hr>
<div class="row">
	<div class="col-sm-3">
		<button onclick="addRow()" id="addRowBtn" type="button" class="btn btn-block btn-lg btn-default">
            <i class="fa fa-plus fa-1x"></i> Add More Questions
        </button>
    </div>
    <div class="col-sm-3 pull-right">
        <button type="submit" class="btn btn-block btn-lg btn-success">
           Save Questions
        </button>
    </div>
</div>

</form>

</div>
<!-- Page Content Ends -->

@endsection

<script type="text/javascript">
	



function addRow() {
	$("#addRowBtn").button("loading");


	var tableLength = $("#Question_table tbody tr").length;

		// alert(tc);

	var tableRow;
	var arrayNumber;
	var count;



	if(tableLength > 0) {		
		tableRow = $("#Question_table tbody tr:last").attr('id');
		arrayNumber = $("#Question_table tbody tr:last").attr('class');
		count = tableRow.substring(3);	
		count = Number(count) + 1;
		arrayNumber = Number(arrayNumber) + 1;					
	} else {
		// no table row
		count = 1;
		arrayNumber = 0;
	}
	

			$("#addRowBtn").button("reset");			

			var tr = '<tr value="'+count+'" id="row'+count+'" class="'+arrayNumber+'">'+				  				
			  	'<td style="padding-left:20px;"">'+
			  	'<div class="form-group">'+
				
				'<input class="form-control" type="text" name="p_name1[]" id="p_name1'+count+'" autocomplete="off"  />'+
				'<input type="hidden" name="p_id[]" id="p_id'+count+'" autocomplete="off" class="form-control" />'+
				'<input onchange="getProductData('+count+')" type="hidden" name="pname[]" id="pname'+count+'" autocomplete="off" class="form-control" />'+
				'<input onchange="getProductData('+count+')" type="hidden" name="code[]" id="code'+count+'" autocomplete="off" class="form-control" />'+
				'<input onchange="getProductData('+count+')" type="hidden" name="unit[]" id="unit'+count+'" autocomplete="off" class="form-control" />'+
				'</div>'+
				'</td>'+
				'<td style="padding-left:20px;"">'+
					'<input onchange="getTotal('+count+')" onblur="getTotal('+count+')" onclick="getTotal('+count+')" value="0" type="text" name="p_price[]" id="p_price'+count+'" autocomplete="off"  class="form-control" />'+
					'<input type="hidden" name="stock[]" id="stock'+count+'" autocomplete="off" class="form-control" />'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<div class="form-group">'+
				'<input type="text" name="qty[]" id="qty'+count+'" onchange="getTotal('+count+')" onblur="getTotal('+count+')" onclick="getTotal('+count+')" autocomplete="off" class="form-control" min="1"  />'+
					'</div>'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<input value="0" type="text" name="stot[]" id="stot'+count+'" autocomplete="off" class="form-control" readonly="true" />'+
				'</td>'+
				'<td style="padding-left:20px;">'+
				'<input value="0" type="text" name="sgst_amt[]" id="sgst_amt'+count+'" autocomplete="off" class="form-control" readonly="true" />'+
					'<input value="0" type="hidden" name="sgst[]" id="sgst'+count+'" autocomplete="off" class="form-control" readonly="true" />'+
				'</td>'+
				'<td style="padding-left:20px;">'+
				'<input value="0" type="text" name="cgst_amt[]" id="cgst_amt'+count+'" autocomplete="off" class="form-control" readonly="true" />'+
					'<input value="0" type="hidden" name="cgst[]" id="cgst'+count+'" autocomplete="off" class="form-control" readonly="true" />'+
				'</td>'+
				
				'<td style="padding-left:20px;">'+
					'<input value="0" type="text" name="tot[]" id="tot'+count+'" autocomplete="off" class="form-control" readonly="true" />'+
				'</td>'+
				'<td style="padding-left:20px;">'+
					'<button id="removeProductRowBtn'+count+'" class="btn btn-default removeProductRowBtn" type="button" onclick="removeProductRow('+count+')"><i class="glyphicon glyphicon-trash"></i></button>'+
					'<button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-plus-sign"></i></button>'+
				'</td>'+
			'</tr>';


			if(tableLength > 0) {							
				$("#Question_table tbody tr:last").after(tr);
			} else {				
				$("#Question_table tbody").append(tr);
			}		


} // /add row


function removeProductRow(row = null)
 {

 // if(confirm('Are you sure delete this row?'))
 //    {
	if(row) {
		$("#row"+row).remove();
		var a=row-1;
		
	} else {
		alert('error! Refresh the page again');
    }
    // }
  }



</script>