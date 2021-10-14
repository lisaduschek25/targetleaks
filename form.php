<?php
// database connection code
if(isset($_POST['txtEmail']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtEmail = $_POST['txtEmail'];
$txtToken = $_POST['txtToken'];
$txtDisclaimer = $_POST['txtDisclaimer'];


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldEmail`, `fldToken`, `fldDisclaimer`) VALUES ('0', '$txtEmail', '$txtToken', '$txtDisclaimer')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";

}
?>
