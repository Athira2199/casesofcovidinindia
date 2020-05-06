<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<style>
*{
	margin:0px;
	padding:0px;
}
.main{
	background-color: rgba(0, 0, 0, 0.5) ;
	margin-top: 4%;
	max-width:100%;
	color:#eeeeee;
}
h1{
	text-align:center;
}
th{
	max-width: 30px;
	overflow:hidden;
	text-overflow:clip;
}
input{
	margin-left:7%;
}
body{
	background-image: url("https://www.humboldt-foundation.de/pls/web/docs/F379492428/Coronavirus-slider.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<body>
	<div class="main">
		<h1>COVID STATISTICS</h1>
		<div class="row">
			<div class="col-md-5 col-sm-12 col-xs-12"></div>
			<div class="col-md-4 col-sm-12 col-xs-12"><input type="button" class="btn btn-primary" id="submit" onclick="myFunction()" value="get statistics"></div>
		</div>
		<div id="datas">
		</div>
	</div>
</body>
<script src="script.js"></script>
</html>