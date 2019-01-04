$("document").ready(function(){
$("#imgheader").load('img/Imageheader.html');
$("#imgheader1").load('img/Imageheader1.html');
$("#boardmangament").load('content/boadmanagement.html');
$("#IndexkkPhotos").load('content/IndexkkPhotos.html');
$("#ProductSlide").load('content/ProductSlide.html');
$("#about").load('content/‌indexkkabout.html');


$("div#nav2 a").click(function(){
		$("#ind").hide();
		$("#content").hide();
		$("#side2").hide();
		$("#main2").hide();
	var page =$(this).attr('href');
	$("#content1").load('content/'+ page +'.html');
	$("#content").hide();
	$("#ind").hide();
	$("#side2").hide();
		$("#main2").hide();
	//$("#main").hide();
	return false;
	
	
});

});