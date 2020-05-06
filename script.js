function myFunction(){
	var s;
	$.ajax({
		type:"post",
		url:"api.php",
		cache:false,
		success: function(response){
		document.getElementById('datas').innerHTML=response;
		}
	});
	return false;
}