// package script

   
function saveData(){
    var action = $( '#product_form' ).attr( 'action' );
    var formData = new FormData($('#product_form')[0]);
    console.log(formData);
    $.ajax({
            url : action,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data)
            {
                console.log(data);
                //$("#product_form")[0].reset();
                // $('#product-model').modal('hide');
                 $('.product_item').load(location.href+' .product_item');
                 //$('#product_form').load(location.href+' #product_form');
            }
        });
    
  }
  function editData(val,id){
    $.ajax({
        url : '/'+val+'/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            console.log(data);
            $("#product_form")[0].reset();
            //var resultJSON = data;
            //var result = $.parseJSON(resultJSON);
$.each(data, function(k, v) {
    //display the key and value pair
    $('input[name='+k+']').val(v);
});
$('button[name=button]').text('Update');
            // console.log(data);
           
        }
    });
  }
  function refresh(){
  
    $('.reloadForm').load(location.href+' .reloadForm');

  }
  function deleteData(val,id){
    $.ajax({
        url : '/'+val+'/'+id,
        type: "DELETE",
        dataType: "JSON",
        success: function(data)
        {
            console.log(data);
            //$("#product_form")[0].reset();
            // $('#product-model').modal('hide');
             $('.product_item').load(location.href+' .product_item');
             //$('#product_form').load(location.href+' #product_form');
        }
    });
  }
  function institute_model(){
      var pro_method = 'add';
    $('#institute_management').modal();
  }
  $('#exam_title').click(function(){
    $('#title_modal').modal();
  });

  function inst_pro(){
    var formData = new FormData($('#product_form')[0]);
    
    $.ajax({
            url : '/institute',
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data)
            {
                console.log(data);
                $("#product_form")[0].reset();
               $('#institute_management').modal('hide');
                 $('.list_ins').load(location.href+' .list_ins');
                 //$('#product_form').load(location.href+' #product_form');
                autoHideNotify('success', 'top right', 'Notification','Your Data Save Successfully');
            }
        });
  }
  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});