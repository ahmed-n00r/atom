<?php 


function includ(){
	include 'page\heder.php';
 }
 function js(){
 	echo '<script src="../php/js/jquery.min.js"></script>
    <script src="../php/js/jquery.easing.min.js"></script>
    <script src="../php/js/bootstrap.min.js"></script>
    <script src="../php/js/wow.js"></script>
    <script src="../php/js/custom.js"></script>
    <script src="../php/js/AngularJS.js"></script>
    <script src="../php/contactform/contactform.js"></script>';
 }
function set($lin){ header('location:'.$lin);}
 ?>