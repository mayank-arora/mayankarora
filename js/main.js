$(document).ready(function(){
	var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	$(".greeting").one(animationEnd, function(){
		// $(".greeting").css("color", "#fff");
		// $(".greeting").
	});
	$(".one").on("click", function(){
		$(".one").css("border-radius", "999999px");
	});
	$(".menu-bars").on("click",function(){
		if($(".menu-sidebar").hasClass("hidden"))
		{
			if($(".menu-sidebar").hasClass("fadeOutUp"))
			{
				$(".menu-sidebar").removeClass("fadeOutUp");
			}
			$(".menu-sidebar").removeClass("hidden");
			$(".menu-sidebar").addClass("fadeInDown");
			$(".menu-sidebar").one(animationEnd, function(){
				$(".menu-sidebar").removeClass("fadeInDown");
			});

		}
		else
		{
			$(".menu-sidebar").addClass("fadeOutUp");
			$(".menu-sidebar").one(animationEnd, function(){
				$(".menu-sidebar").addClass("hidden");
			});
		}
	});
});