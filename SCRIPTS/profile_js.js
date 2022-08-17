//---------------- | Управление мышью ----------------//

$(".avatar_css").mouseenter(function(){
	$(this).css({
		"filter":"blur(3px)"
	})
	$("#conrole_avatar").show();
});
$("#conrole_avatar").mouseenter(function(){
	$(".avatar_css").css({
		"filter":"blur(3px)"
	})
	$("#conrole_avatar").show();
})
$("#conrole_avatar").mouseleave(function(){
	$(".avatar_css").css({
		"filter":"blur(0px)"
	})
	$("#conrole_avatar").hide();
})
$(".avatar_css").mouseleave(function(){
	$(this).css({
		"filter":"blur(0px)"
	})
	$("#conrole_avatar").hide();
});
