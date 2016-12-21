<html><head><meta charset = "utf8"></head></html>
<?php
$host = "localhost";
$username = "it57160284";
$password = "it57160284";
$database = "it57160284";
$conn = mysqli_connect($host,$username,$password,$database);
	 //$conn = mysqli_query("SET NAMES UTF8");
$conn->query("SET NAMES UTF8");
$conn ->query($sql,$link);
$result = $conn->query($sql);
if($_POST['Name']!=null&&$_POST['THname']!=null&&$_POST['Position']!=null&&$_POST['Address']!=null
	&&$_POST['Mobile']!=null&&$_POST['Phone']!=null&&$_POST['Fax']!=null&&$_POST['Email']!=null){
	$id = $_GET['id'];
	$Name  = $_POST['Name'];
	$THname  = $_POST['THname'];
	$Position  = $_POST['Position'];
	$Address  = $_POST['Address'];
	$Mobile  = $_POST['Mobile'];
	$Phone  = $_POST['Phone'];
	$Fax  = $_POST['Fax'];
	$Email  = $_POST['Email'];
	$sql = "UPDATE NameCard set 
	Name = '$Name' , THname = '$THname' , Position = '$Position' , Address = '$Address'
	, Mobile = '$Mobile', Phone = '$Phone', Fax = '$Fax', Email = '$Email' where id = '$id'"; 

	if($conn->query($sql)){
		echo "update a business card success.";
		echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}else{
		echo "update a business card error.";
		echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}
}else{
	echo"Please input form";
	echo"<meta http-equiv='refresh' content='0;URL=edit.php?id=".$_GET['id']."'>";
	//echo"<meta http-equiv='refresh' content='0;URL=index .php'>";
}
?>
