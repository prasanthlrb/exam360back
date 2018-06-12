// package script

   var act;
   var pro_method;
  var langdel;
  var subdel;
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
      pro_method = 'add';
    $('#institute_management').modal();
  }
  function language(){
    $("#product_form")[0].reset();
      pro_method = 'addlan';
       act = '/exlan';
       $('#languageForm').text('Save');
    $('#language').modal();
     $('#dellan').hide();
  }
  function examadd(){
    pro_method = 'addtit';
    $("#product_f")[0].reset();
      $('#titleform').text('Save');
      act = '/extitle';
      $.ajax({
        url : '/exlan',
        type: "GET",
        success: function(data)
        {
          $('#lansel').html(data);
        }
      });

    $('#product-model').modal();
  }
  function subadd(){
      pro_method = 'sub';
      act='/subStore';
    $('#subadd').modal();
    $('.delsub').hide();
    $('.addsub').text('Save');
    $("#product_form")[0].reset();
  }

  function subedit(id){
    pro_method = 'sub';
    $('.delsub').show();
    subdel = id;
    act = '/subUpdate/'+id;
    $('.addsub').text('Update');
       $.ajax({
        url : '/subjectEdit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('input[name=name]').val(data.name);
          $('select[name=exam_id]').val(data.exam_id);
          $('select[name=status]').val(data.status);
          $('#subadd').modal();
        }
      });
  }
  function chpedit(id){
    pro_method = 'chap';
    act = '/chapUpdate/'+id;
    $('.chapt').text('Update');
       $.ajax({
        url : '/chapedit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('input[name=name]').val(data.name);
          $('select[name=sub_id]').val(data.sub_id);
         
          $('#chapter_add').modal();
        }
      });
 
  }
  function chapter_add(){
      pro_method = 'chap';
      act = '/chapstore';
    $.ajax({
      url : '/subjectselect',
      type: "GET",
      success: function(data)
      {
        $('#chapter_add').modal();
        $('#sub_chap').html(data);
        $('.chapt').text('Save');
        $("#product_f")[0].reset();
      }
    });
  }

function lanedit(id) {
   pro_method = 'editlan';
    act = '/exlan/'+id;
    langdel = id;
    $('#languageForm').text('Update');
       $.ajax({
        url : '/exlan/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('input[name=name]').val(data.name);
          $('select[name=status]').val(data.status);
          $('#language').modal();
          $('#dellan').show();
        }
      });
}
function edittit(id) {
   pro_method = 'edittit';
    act = '/extitle/'+id;
    langdel = id;
          $('#titleform').text('Update');
       $.ajax({
        url : '/extitle/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

          $('input[name=title]').val(data.title);
          $('select[name=language_id]').val(data.language_id);
          $('select[name=status]').val(data.status);
          $('#product-model').modal();
          //$('#dellan').show();
        }
      });
}

function delform() {
  $.ajax({
            url : '/exlanhide',
            type: "POST",
            data: {id:langdel},
            dataType: "JSON",
            success: function(data)
            {
              $('#language').modal('hide');
               $('.product_i').load(location.href+' .product_i');
            }
          });
}
function deletitle(id) {
  $.ajax({
            url : '/extitlehide',
            type: "POST",
            data: {id:id},
            dataType: "JSON",
            success: function(data)
            {
              $('.product_item').load(location.href+' .product_item');
            }
          });
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



  function saveform(){
if(pro_method == 'addlan' || pro_method == 'editlan'){
    
      var formData = new FormData($('#product_form')[0]);
    }else if(pro_method == 'addtit' || pro_method == 'edittit'){
     
  var formData = new FormData($('#product_f')[0]);
    }



    
     $.ajax({
            url : act,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data)
            {
                console.log(data);
                $("#product_form")[0].reset();
                $('#product-model').modal('hide');
                $('#language').modal('hide');
                 if(pro_method == 'addlan' || pro_method == 'editlan'){
                 $('.product_i').load(location.href+' .product_i');
               }else if(pro_method == 'addtit' || pro_method == 'edittit'){

                 $('.product_item').load(location.href+' .product_item');
               }
            }
        });
    
  }


  function savesub(){
    if(pro_method == 'chap'){
      var formData = new FormData($('#product_f')[0]);
    }else{

      var formData = new FormData($('#product_form')[0]);
    }
    $.ajax({
      url : act,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data)
      {
          $("#product_form")[0].reset();
          $('#subadd').modal('hide');
          $('#chapter_add').modal('hide');
          $("#product_form")[0].reset();
          $("#product_f")[0].reset();
           $('.chapterTable').load(location.href+' .chapterTable');
           $('.subjectTable').load(location.href+' .subjectTable');
         
      }
  });
  }
  function delsub(){
  
    $.ajax({
      url : '/subDelete',
      type: "POST",
      data: {id:subdel},
      dataType: "JSON",
      success: function(data)
      {
        $('#subadd').modal('hide');
        $('.subjectTable').load(location.href+' .subjectTable');
      }
    });
  }
  function delchap(id){
  
    $.ajax({
      url : '/chapDelete',
      type: "POST",
      data: {id:id},
      dataType: "JSON",
      success: function(data)
      {
        $('.chapterTable').load(location.href+' .chapterTable');
      }
    });
  }
  
  

  $('.summer').summernote({
    height: 150,   //set editable area's height
    codemirror: { // codemirror options
      theme: 'monokai'
    }
  });



function save_question(){

   var value = $('#option4').val();

  $("#option3").text( value );

}