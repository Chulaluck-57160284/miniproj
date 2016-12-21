<?php
$host = "localhost";
$username = "it57160284";
$password = "it57160284";
$database = "it57160284";

$conn = mysqli_connect($host,$username,$password,$database);
$conn ->query("set names utf8");
if($conn ->connect_error){
	die('Connect error!');
}else{
	if($_POST['Name']!=null&&$_POST['THname']!=null&&$_POST['Position']!=null&&$_POST['Address']!=null
		&&$_POST['Mobile']!=null&&$_POST['Phone']!=null&&$_POST['Fax']!=null&&$_POST['Email']!=null){
		//$id = $_POST['id'];
		$Name  = $_POST['Name']; 
		$THname  = $_POST['THname'];  
		$Position  = $_POST['Position'];
		$Address  = $_POST['Address'];
		$Mobile  = $_POST['Mobile'];
		$Phone  = $_POST['Phone'];
		$Fax  = $_POST['Fax'];
		$Email  = $_POST['Email'];
		$sql = "INSERT INTO NameCard(Name,THname,Position,Address,Mobile,Phone,Fax,Email) 
		VALUES('$Name','$THname','$Position','$Address','$Mobile','$Phone','$Fax','$Email')";
		//echo $sql;
		$conn ->query($sql);
		echo"Insert a business card success.";
		echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
	}else{
		echo"Please input form";
		echo"<meta http-equiv='refresh' content='0;URL=add.php'>";
	}
}
