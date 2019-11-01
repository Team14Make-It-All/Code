<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #000000;
  text-align: left;
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

<?php

echo "<h2>To Do List</h2>";
echo "<br>";
?>
	<div class="todo">
<?php
echo "<table>";
echo   "<tr>";
echo    "<th>Job Name</th>";
echo     "<th>Job ID</th>";
echo     "<th>Job Deadline</th>";
echo 	"<th>Job Completion</th>";
echo 	"<th></th>";
echo   "</tr>";
echo   "<tr>";
echo     "<td>Removing questionable stains from office computers</td>";
echo     "<td>G12055</td>";
echo     "<td>25/12/2019</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail1" class="editbtn">Job Details</button></td>


<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Finding out the half-life 3 release date</td>";
echo    "<td>N3V312</td>";
echo     "<td>1/1/3000</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail2" class="editbtn">Job Details</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Figuring out how bitcoin works</td>";
echo     "<td>G58945</td>";
echo     "<td>2//2/2022</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail3" class="editbtn">Job Details</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>GPU malfunction</td>";
echo     "<td>G585648</td>";
echo     "<td>8/9/2020</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail4" class="editbtn">Job Details</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Renewing room 1 office software</td>";
echo     "<td>S845692</td>";
echo     "<td>9/12/2019</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail5" class="editbtn">Job Details</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Replacing all printers, for circuit washing machines</td>";
echo     "<td>H482168</td>";
echo     "<td>8/7/2019</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail6" class="editbtn">Job Details</button></td>
<?php
echo   "</tr>";
echo "</table>";
echo "</div>";

echo "<br><br><br>";
?>
<h2>Completed Jobs  <button class="editbtn">Clear All</button></h2>
<?php
echo "<br>";
?>
<div class="complete">
<?php
echo "<h4>";
echo "<table>";
echo   "<tr>";
echo     "<th>Job Name</th>";
echo     "<th>Job ID</th>";
echo     "<th>Job Deadline</th>";
echo 	"<th></th>";
echo   "</tr>";
echo   "<tr>";
echo     "<td>Fixing a piece of code that was messing with the washing machines</td>";
echo     "<td>SH542691</td>";
echo     "<td>2/10/2019</td>";
?>
<td><button class="editbtn">Undo Completion</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Fixing the computers at Centro comercial Moctezuma</td>";
echo     "<td>H845845</td>";
echo     "<td>H482184</td>";
?>
<td><button class="editbtn">Undo Completion</button></td>
<?php
echo   "</tr>";
echo "</table>";
echo "</h4>";
echo "</div>";

?>

<script>
var btn = document.getElementById('detail1');
btn.addEventListener('click', function() {
  document.location.href = 'details.php';
});
var btn = document.getElementById('detail2');
btn.addEventListener('click', function() {
  document.location.href = 'details.php';
});
var btn = document.getElementById('detail3');
btn.addEventListener('click', function() {
  document.location.href = 'details.php';
});
var btn = document.getElementById('detail4');
btn.addEventListener('click', function() {
  document.location.href = 'details.php';
});
var btn = document.getElementById('detail5');
btn.addEventListener('click', function() {
  document.location.href = 'details.php';
});
var btn = document.getElementById('detail6');
btn.addEventListener('click', function() {
  document.location.href = 'details.php';
});
</script>



</body>
</html>
