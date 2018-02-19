// ADMIN

$(document).ready(function(){
    $("#action_who_start_end_quest").click(function(){
        $("#who_start_end_quest").toggle();
		$("#create_quest").hide();
    });
	
	$("#action_create_quest").click(function(){
        $("#create_quest").toggle();
		$("#who_start_end_quest").hide();
    });
});