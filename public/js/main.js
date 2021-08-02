$(document).ready(function(){
	$('.tabs li a').click(function(){
		var id = $(this).attr("data-id");
		$('.tab_content').removeClass('active');
		$('.tabs li').removeClass('active');
		$(id).addClass('active');
		$(this).parent('li').addClass('active');
	});

	$('.open_side_menu').click(function(){
		$('.panel_sidebar').addClass('active');
	});

	$('.panel_sidebar').on('click', function(){
		$(this).removeClass('active');
	});

	$('.admin_bar').click(function(e){
		e.preventDefualt();
	});

	$('.multiple-select').select2();

});