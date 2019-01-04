$("document").ready(function(){
//$("#content").load('web/index.html');

$("div#nav2 a").click(function(){
		$("#ind").hide();
		$("#content").hide();
			$("#content3").hide();
		$("#cont").hide();
		$("#main2").hide();
	var page =$(this).attr('href');
	$("#content1").load('content/'+ page +'.html');
	$("#content").hide();
		$("#content3").hide();
	$("#cont").hide();
	$("#ind").hide();
	$("#side2").hide();
		$("#main2").hide();
	//$("#main").hide();
	return false;
	
	
});

});