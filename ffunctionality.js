$(document).ready(function(){
	$('.catagory-item').click(function(){
		var catagory = $(this).attr('id');
		alert(catagory);
	});
});