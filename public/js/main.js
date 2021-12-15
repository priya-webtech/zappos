// $(document).ready(function() {
//    $(".admin_bar li").click(function() {
//       // remove classes from all
//       $(".admin_bar li").removeClass("active");
//       // add class to the one we clicked
//       $(this).addClass("active");
//    });
// });

$(document).ready(function(){
  $('.admin_bar ul li').each(function() {
    $(this).find('.sub_items').parents('li').addClass('menu-dropdown');
    $(this).find('.sub_items').parents('li').prepend("<a class='nav-arrow'></a>");
  });
});
$(document).ready(function(){
	$('.sub_items').hide();
	$('.nav-arrow').click(function(){
		// $(this).parent().siblings().removeClass('drop-open');
		$('.sub_items').hide(300);
		$(this).parent().find('.sub_items').toggle(300);
	});
});
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

	// $('.admin_bar').click(function(e){
	// 	e.preventDefualt();
	// });

	// $('.multiple-select').select2();

});


// Taxes Overrides page js
$(document).ready(function() {
	$(".edit-tax-dropdown").hide();
    $(".edit-tax button").click(function() { 
       $(".edit-tax-dropdown").toggle();
	});
	$(".more-actions-dp .filter-dropdown").hide();
    $(".more-actions-dp button").click(function() { 
       $(".more-actions-dp .filter-dropdown").toggle();
	});
});

// multiple select option with checkboxes js
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}


