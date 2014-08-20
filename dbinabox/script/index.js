$(document).ready(function(){
	$.get("/tjfa/dashboardInfo.php",function(data){
		$.each(data,function(key,value) {
			$("#"+key).html(value);
			console.log(key);
		});
	},"json");
});