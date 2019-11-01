<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

body {
	text-align: center;
}

td, th {
  border: 1px solid #000000;
  text-align: center;
  padding: 8px;
}

h2 {
  text-align: center;
  text-decoration: underline;
}

.todo {
  background-color: #ffcccb;	
}

.complete {
  background-color: #90ee90;
}

body {
  background-color: #dddddd;
}


</style>
</head>
<body>

	<table>
		<tr><th>Job Name: </th></tr>
		<tr><td>Job ID:</td></tr>
		<tr><td>Job Deadline:</td></tr>
	</table>
	
	
	<textarea name="message" rows="10" cols="30">
	Problem Notes:
	</textarea>
	
	<br><br><br><br>

<?php


?>

<button id="return1" class="editbtn">Discard</button>
============
<button id="return2" class="editbtn">Save</button>

<script>
var btn = document.getElementById('return1');
btn.addEventListener('click', function() {
  document.location.href = 'technician.php';
});
var btn = document.getElementById('return2');
btn.addEventListener('click', function() {
  document.location.href = 'technician.php';
});
</script>

</body>
</html>
