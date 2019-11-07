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

.boxed {
	border: 1px solid black;
	display: inline-block;
	padding-top: 5px;
	padding-bottom: 5px;
	padding-left: 15px;
	padding-right: 15px;
}

body {
  background-color: #dddddd;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


</style>
</head>
<body>

	<div class="boxed">
		Problem Name: Figuring out how bitcoin works 
	</div>
	<br>
	<div class="boxed">
		Problem ID: G12055
	</div>
	<br>
	<div class="boxed">	
		Problem Completed: null
	</div>
	<br>
	<div class="boxed">	
		Current Technician: Harold Jefferson - GBR
	</div>
	<br>
	<button id="item" class="editbtn">Item Information</button>
	<br>
	<button id="product" class="editbtn">Product Information</button>
	<br>
	
	
	<textarea name="message" rows="10" cols="30">
	Problem Notes:
	</textarea>
	
	<textarea name="message" rows="10" cols="30">
	Solution Notes:
	</textarea>
	
	<br><br><br><br>

<?php
?>

	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h>Serial Number:     </h><textarea name="message" rows="1" cols="10">94-05-02</textarea><br>
	<h>Problem Date:      </h><textarea name="message" rows="1" cols="10">01/01/2004</textarea><br>
	<h>Solution Available:</h><textarea name="message" rows="1" cols="10">True</textarea><br>
	<h>Previous Item Problems: </h><br><textarea name="message" rows="5" cols="40"></textarea><br>
	<button id="return3" class="editbtn">Discard</button>
	============
	<button id="return4" class="editbtn">Save</button>
  </div>

</div>

<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h>Product Name:     </h><textarea name="message" rows="1" cols="10">HP5660</textarea><br>
	<h>Manufacturer:         </h><textarea name="message" rows="1" cols="10">HP</textarea><br>
	<h>Previous Product Problems: </h><br><textarea name="message" rows="5" cols="40"></textarea><br>
	<button id="return5" class="editbtn">Discard</button>
	============
	<button id="return6" class="editbtn">Save</button>
  </div>

</div>



<button id="return1" class="editbtn">Discard</button>
============
<button id="return2" class="editbtn">Save</button>

<script>
var btn = document.getElementById('return1');
btn.addEventListener('click', function() {
  document.location.href = 'technician.php';
});
var modal = document.getElementById("myModal");
var btn = document.getElementById('item');
btn.addEventListener('click', function() {
  modal.style.display = "block";
});
var modal2 = document.getElementById("myModal2");
var btn = document.getElementById('product');
btn.addEventListener('click', function() {
  modal2.style.display = "block";
});
var btn = document.getElementById('return3');
btn.addEventListener('click', function() {
  modal.style.display = "none";
});
var btn = document.getElementById('return4');
btn.addEventListener('click', function() {
  modal.style.display = "none";
});
var btn = document.getElementById('return5');
btn.addEventListener('click', function() {
  modal2.style.display = "none";
});
var btn = document.getElementById('return6');
btn.addEventListener('click', function() {
  modal2.style.display = "none";
});
var btn = document.getElementById('return2');
btn.addEventListener('click', function() {
  document.location.href = 'technician.php';
});
</script>

</body>
</html>
