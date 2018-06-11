jQuery(document).ready(function() {
	$('.wysihtml5').wysihtml5();

	$('.summernote').summernote({
		height : 200, // set editor height

		minHeight : null, // set minimum height of editor
		maxHeight : null, // set maximum height of editor

		focus : true // set focus to editable area after initializing summernote
	});
	$('#savequestion').click(function(){

		alert('ok');
		var markupStr = 'hello world';
		//var textareaValue = $('#summernote').summernote('code');
		$('.summernote').summernote('code', markupStr);
		//var content = $('textarea[name="question"]').html($('#tit-test').code());
		//var markupStr = $('#summernote').eq(1).summernote('code');
		//$('#tit-test').html(markupStr);
		//console.log(markupStr);
		//console.log(textareaValue);
	});
	  

}); 