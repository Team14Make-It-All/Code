<!DOCTYPE html>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<title> Helpdesk </title>
<style type="text/css">
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	background-color: #C0C0C0;
}
#grad1 {
  background-color: #FFD700;
  background-image: linear-gradient(#FFD700, #D6AF36);
}
#b1 {
	height: 50px;
    width: 200px;
	text-align: center;
	margin:0 auto;
	padding: 0 2px;

}
.center {
	text-align:center;
}
body,td,th {
	color: black; 
}
.larger {
	font-size:larger;
	text-align:left;
}
table {
	margin-left:auto;
	margin-right:auto;
	text-align:center;
}
.resTable {
	margin-left:auto;
	margin-right:auto;
	background-color:purple;
	text-align:center;
}
td, th {
	padding-left: 10px;
    padding-right: 10px;
}

</style>
<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.3.0/math.min.js"></script>
<script type = "text/javascript">
var techUserN = specialist
var helpUserN = hdoperator
var techPassW = specific
var helpPassW = general
</script>

</head>


<body>
	<div id="grad1" style="text-align:center">
		<h1 class="center">Prototype - Login</h1>
		
		<form id="details" class="center">
		<h2>First name: <input name="username" type="text" class="larger" id="username"  size="12" /></h2>
		<h2>Last name: <input name="password" type="text" class="larger" id="password"  size="12" /></h2>
		</form>
		<button type="button" id="b1"><h2>Login</h2></button>
		</br>
	</div>
	
</body>



	


</html>