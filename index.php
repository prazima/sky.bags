<div style="text-align:center; margin-top:40px;"><img src="logo3.jpg"></div>

<h1 style="font-size:50px; text-align:center;">SKYBAGS</h1>
<p style="font-size:20px; text-align:center; line-height:30px; margin-bottom:50px;">Premium Quality Bags in <br> Low Prices</p>

<div style="text-align:center; margin-top:40px;">
<a style="padding-right: 20px;" href="contact us.html">Contact us</a>
</div>

<div style="text-align:center; margin-top:40px;">
</div>



<hr>


<h1 style="font-size:50px; text-align:center;">Our Products</h1>

<div style="text-align:center;"><img src="bag1.jpeg"></div>

<div style="text-align:center; margin-top:40px;">


<a style="padding-right: 20px;" href="schoolbags.html">School Bags</a>
</div>

<div style="text-align:center;"><img src="bag2.jpg"></div>

<div style="text-align:center; margin-top:40px;">

<a style="padding-right: 20px;" href="bagss.html">Travel Bags</a>

</div>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOME</title>
</head>
<body>

<hr>
<form action="#" method="POST">
Name:<input type="text" name="empname"><br>
Email:<input type="text" name="empemail"><br>
Mobile:<input type="text" name="empmobile"><br>
<input type="submit" name="submit">
</div>
</form>

<?php
if(isset($_POST['submit'])){
$ee_name = $_POST['empname'];
$ee_email = $_POST['empemail'];
$ee_mobile = $_POST['empmobile'];
$conn = mysqli_connect('localhost','root','','mycompany');
$sql = "INSERT INTO `empdata`(`ename`,`eemail`,`emobile`) values('$ee_name','$ee_email','$ee_mobile')"
;

if(mysqli_query($conn,$sql)){
echo "Data Successfully Added as ${ee_name}";
};
}
?>

<div style="text-align:center; margin-top:40px;">
<footer>
<p>&copy,2023 Skybags, All rights reserved.</p>
</footer>
</div>


</body>
</html>