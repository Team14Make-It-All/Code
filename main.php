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
    <button id="TI" class="w3-bar-item w3-button tablink" onclick="openTabVert(event, '4')">Technitian information</button>
  </div>

  <div style="margin-left:130px">

    <div id="1" class="w3-container verttab">
      <h2>Client information</h2>

      <form id = "allInfo" action="">
        First name:<br>
        <input type="text" name="firstname" value="Mickey">
        <br>
        Last name:<br>
        <input type="text" name="lastname" value="Mouse">
        <br><br>
        <input type = "button" onclick="openTabVert2(event, '2', 'PI')" value = "Next">


    </div>

    <div id="2" class="w3-container verttab" style="display:none">
      <h2>Problem information</h2>

      First name:<br>
      <input type="text" name="firstname" value="Donald">
      <br>
      Last name:<br>
      <input type="text" name="lastname" value="Duck">
      <br><br>
      <input type = "button" onclick="openTabVert2(event, '1', 'CI')" value = "Previous">
      <input type = "button" onclick="openTabVert2(event, '3', 'EI')" value = "Next">

    </div>

    <div id="3" class="w3-container verttab" style="display:none">
      <h2>Equipment information</h2>

      First name:<br>
      <input type="text" name="firstname" value="Wheres">
      <br>
      Last name:<br>
      <input type="text" name="lastname" value="Wally">
      <br><br>
      <input type = "button" onclick="openTabVert2(event, '2', 'PI')" value = "Previous">
      <input type = "button" onclick="openTabVert2(event, '4', 'TI')" value = "Next">


    </div>

    <div id="4" class="w3-container verttab" style="display:none">
      <h2>Technitian information</h2>

      First name:<br>
      <input type="text" name="firstname" value="Damn">
      <br>
      Last name:<br>
      <input type="text" name="lastname" value="Daniel">
      <br><br>
      <input type = "button" onclick="openTabVert2(event, '3', 'EI')" value = "Previous">
      <input type = "submit" value = "Submit">
    </form>

    </div>

  </div>

</div>

<div id="Active" class="w3-container horiztab" style="display:none">
  <h2>Active Problems</h2>

</div>

<div id="Solved" class="w3-container horiztab" style="display:none">
  <h2>Solved Problems</h2>

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

</body>
</html>
