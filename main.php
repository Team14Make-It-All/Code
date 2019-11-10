<!DOCTYPE html>
<html>
<title>Main</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="openTabHoriz('Current'); resetForm('allInfo'); openTabVert2(event, '1', 'CI');">New Problem</button>
  <button class="w3-bar-item w3-button" onclick="openTabHoriz('Current')">Current</button>
  <button class="w3-bar-item w3-button" onclick="openTabHoriz('Active')">Active</button>
  <button class="w3-bar-item w3-button" onclick="openTabHoriz('Solved')">Solved</button>
</div>

<div id="New Problem" class="w3-container horiztab">
  <h2>New Problem</h2>

</div>

<div id="Current" class="w3-container horiztab" style="display:none">
  <h2>Current Problem</h2>

  <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:130px">
    <h5 class="w3-bar-item"></h5>
    <button id="CI" class="w3-bar-item w3-button tablink" onclick="openTabVert(event, '1')">Client information</button>
    <button id="PI" class="w3-bar-item w3-button tablink" onclick="openTabVert(event, '2')">Problem information</button>
    <button id="EI" class="w3-bar-item w3-button tablink" onclick="openTabVert(event, '3')">Equipment information</button>
    <button id="TI" class="w3-bar-item w3-button tablink" onclick="openTabVert(event, '4')">Technician suggestion</button>
  </div>

  <div style="margin-left:130px">

    <div id="1" class="w3-container verttab">
      <h2>Client information</h2>

      <form id = "allInfo" action="">
        First name:<br>
        <input type="text" name="firstname" value="Dilip">
        <br>
        Last name:<br>
        <input type="text" name="lastname" value="Stevens">
        <br><br>
        <input type = "button" onclick="openTabVert2(event, '2', 'PI')" value = "Next">


    </div>

    <div id="2" class="w3-container verttab" style="display:none">
      <h2>Problem information</h2>

      Problem Description:<br>
      <input type="text" name="problemDescription" value="Screen cracked">
      <br>
      Problem Area:<br>
      <input type="text" name="problemArea" value="display">
      <br><br>
      <input type = "button" onclick="openTabVert2(event, '1', 'CI')" value = "Previous">
      <input type = "button" onclick="openTabVert2(event, '3', 'EI')" value = "Next">

    </div>

    <div id="3" class="w3-container verttab" style="display:none">
      <h2>Equipment information</h2>

      Hardware/software ID:<br>
      <input type="text" name="equipmentId" value="53732">
      <br><br>
      <input type = "button" onclick="openTabVert2(event, '2', 'PI')" value = "Previous">
      <input type = "button" onclick="openTabVert2(event, '4', 'TI')" value = "Next">


    </div>

    <div id="4" class="w3-container verttab" style="display:none">
      <h2>Technician suggestion</h2>

        Hardware - Jeff   <input type='radio' name='rad1' id='spec1' class='bigger' checked='checked'/><br>
        Hardware - Greg   <input type='radio' name='rad1' id='spec2' class='bigger'/><br>
        Software - Dan   <input type='radio' name='rad1' id='spec3'  class='bigger'/><br>
      <input type = "button" onclick="openTabVert2(event, '3', 'EI')" value = "Previous">
      <input type = "submit" value = "Submit">
    </form>

    </div>

  </div>

</div>

<div id="Active" class="w3-container horiztab" style="display:none">
  <h2>Active Problems</h2>
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
</div>

<div id="Solved" class="w3-container horiztab" style="display:none">

  <h2>Solved Problems <button class="editbtn">Clear All</button></h2>
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
</div>


<script>
function openTabVert(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("verttab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-purple", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " w3-purple";
  return evt.currentTarget.className;
}

function openTabHoriz(tabName) {
  var i;
  var x = document.getElementsByClassName("horiztab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}

function resetForm(formID) {
  document.getElementById(formID).reset();
}

function openTabVert2(evt, tabName, tabName2) {
  var i, x, tablinks;
  x = document.getElementsByClassName("verttab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
    document.getElementById(tabName2).click();
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += "active";
}

</script>
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
