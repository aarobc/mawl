
$(document).ready(function($) {
    $(".clickableRow").click(function() {
      window.document.location = $(this).attr("href");
    });

	$(".rmlocation").click(function(){
		var url = $(this).attr('href');
		console.log(url);
		$.ajax({
		url: url,
		type: 'DELETE',
		success: function(result) {
			console.log(result);
		
			}
		 });
	});

	
	// for to remove default option on initial form creation for asset
	$('select').each(function(){
		if(!$(this).has("option[selected='selected']").length){
			$(this).prop('selectedIndex', -1);
		}

	});

	$("select[name='category']").change(function(){
			console.log($(this).val());

	});
});
