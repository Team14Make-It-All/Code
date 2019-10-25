<!DOCTYPE html>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="noindex, nofollow" />
<title> Helpdesk </title>
<style type="text/css">
body {
	font-family: Garamond, Baskerville, Baskerville Old Face, Hoefler Text, Times New Roman, serif;
	background-color: #C0C0C0;
}
h1 {
	font-family: Garamond, Baskerville, Baskerville Old Face, Hoefler Text, Times New Roman, serif;
}
#grad1 {
  background-color: #FFD700;
  background-image: linear-gradient(#FFD700, #D6AF36);
}
#grad2 {
  background-color: #FFD700;
  background-image: linear-gradient(#D6AF36, #FFD700);
}
#highlight {
  background-color: #AA0000;
  background-image: linear-gradient(#AA0000, #600000);
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
.left {
  overflow:hidden;
}
.left-side {
  float:left;
  width:30%;
}

</style>
<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.3.0/math.min.js"></script>
<script type = "text/javascript">
var techUserN = 'specialist'
var helpUserN = 'hdoperator'
var techPassW = 'specific'
var helpPassW = 'general'
</script>

</head>


<body>
	<table border="10" id="grad1">
	<tr>
	<td>    <h1 class="center">Prototype - main </h1> </td>
	<td id="highlight" >	<h1 class="center">New problem</h1> </td>
	<td>	<h1 class="center">Current</h1> </td>
	<td>	<a href="problemRecord.php" ><h1 class="center">Active</h1></a> </td>
	<td>	<h1 class="center">Solved</h1> </td>
	</tr>
	</table>
	
<div class=left>
	<div style="text-align:left" class=left-side>
	<table border="10" id="grad2">
	<tr> <td> <h1 class="center"> Client info</h1> </td></tr>
	<tr> <td> <h1 class="center"> Problem info</h1> </td></tr>
	<tr> <td> <h1 class="center"> Equipment info</h1> </td></tr>
	<tr> <td> <h1 class="center"> Technician allocation</h1> </td></tr>
	</table>
	</div>
	
	<div style="text-align:left"> 
	<form id="details">
		<h2>Field 1: <input name="f1" type="text" class="larger" id="f1"  size="30" ></h2>
		<h2>Field 2: <input name="f2" type="text" class="larger" id="f2"  size="30" ></h2>
		<h2>Field 3: <input name="f3" type="text" class="larger" id="f3"  size="30" ></h2>
		<h2>Field 4: <input name="f4" type="text" class="larger" id="f4"  size="30" ></h2>
		<h2>Field 5: <input name="f5" type="text" class="larger" id="f5"  size="30" ></h2>
		<h2>Field 6: <input name="f6" type="text" class="larger" id="f6"  size="30" ></h2>
		</form>
	</br>
</div>
</div>


</body>



	


</html>