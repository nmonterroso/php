$(document).ready(function()
{
	$("#tabs div").click(function()
	{
		var fade_time = 500;
		var id = $(this)
			.siblings("div")
				.removeClass("selected")
				.end()
			.addClass("selected")
			.attr("id");
		
		$("#"+id+"_data")
			.siblings("div")
				.fadeOut(fade_time)
				.end()
			.delay(fade_time)
			.fadeIn(fade_time);
	});
	
	$(".internal_link").click(function()
	{
		var id = $(this).attr("target");
		$("#tabs").find("#"+id).click();
		
		return false;
	});
	
	$("#tabs div:first").click();
	
	$(".website_link").click(function()
	{
		window.open($(this).attr("href"));
		return false;
	});
});