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

echo "<h2>Active Problems</h2>";
echo "<br>";
?>
	<div class="todo">
<?php
echo "<table>";
echo   "<tr>";
echo    "<th>Problem</th>";
echo     "<th>Problem ID</th>";
echo     "<th>Problem Start</th>";
echo 	"<th>Job Completion</th>";
echo 	"<th></th>";
echo   "</tr>";
echo   "<tr>";
echo     "<td>Paper Stuck in Printer</td>";
echo     "<td>0</td>";
echo     "<td>25/12/2019</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail1" class="editbtn">Job Details</button><button>Relocate Job</button></td>


<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Excel vlookup malfunction</td>";
echo    "<td>1</td>";
echo     "<td>1/1/3000</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail2" class="editbtn">Job Details</button><button>Relocate Job</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Figuring out how bitcoin works</td>";
echo     "<td>2</td>";
echo     "<td>2//2/2022</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail3" class="editbtn">Job Details</button><button>Relocate Job</button> </td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>GPU malfunction in Graphics Stations</td>";
echo     "<td>3</td>";
echo     "<td>8/9/2020</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail4" class="editbtn">Job Details</button><button>Relocate Job</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Renewing the Room 1 office software</td>";
echo     "<td>4</td>";
echo     "<td>9/12/2019</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail5" class="editbtn">Job Details</button><button>Relocate Job</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Replacing all printers, for state of the art type writers, where needed</td>";
echo     "<td>5</td>";
echo     "<td>8/7/2019</td>";
?>
<td><button class="editbtn">Complete</button></td>
<td><button id="detail6" class="editbtn">Job Details</button><button>Relocate Job</button></td>
<?php
echo   "</tr>";
echo "</table>";
echo "</div>";

echo "<br><br><br>";
?>
<h2>Completed Problems <button class="editbtn">Clear All</button></h2>
<?php
echo "<br>";
?>
<div class="complete">
<?php

echo "<table>";
echo   "<tr>";
echo     "<th>Problem</th>";
echo     "<th>Problem ID</th>";
echo     "<th>Problem Start</th>";
echo     "<th>Date of Completion</th>";
echo 	"<th></th>";
echo   "</tr>";
echo   "<tr>";
echo     "<td>Fixing a piece of code that was messing with the washing machines</td>";
echo     "<td>8</td>";
echo     "<td>2/10/2019</td>";
echo     "<td>2/10/2019</td>";
?>
<td><button class="editbtn">Undo Completion</button><button id="detail7" class="editbtn">Job Details</button></td>
<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Fixing the computers at Centro comercial Moctezuma</td>";
echo     "<td>9</td>";
echo     "<td>12/25/1990</td>";
echo     "<td>2/10/2019</td>";
?>
<td><button class="editbtn">Undo Completion</button><button id="detail8" class="editbtn">Job Details</button></td>

<?php
echo   "</tr>";
echo   "<tr>";
echo     "<td>Head Office's Desktop in a neverending restart loop</td>";
echo     "<td>10</td>";
echo     "<td>12/25/1990</td>";
echo     "<td>2/10/2019</td>";
?>
<td><button class="editbtn">Undo Completion</button><button id="detail9" class="editbtn">Job Details</button></td>

<?php
echo   "</tr>";
echo "</table>";
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

var btn = document.getElementById('detail7');
btn.addEventListener('click', function() {
  document.location.href = 'detailsSolutions.php';
});
var btn = document.getElementById('detail8');
btn.addEventListener('click', function() {
  document.location.href = 'detailsSolutions.php';
});
var btn = document.getElementById('detail9');
btn.addEventListener('click', function() {
  document.location.href = 'detailsSolutions.php';
});
</script>



</body>
</html>
