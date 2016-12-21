<html><head><meta charset="utf-8"></head></html>
<?php
$input=0;
if(!empty($_POST['s1'])){
	$input=1;
}
if(!empty($_POST['s2'])){
	$input=2;
}
if($input==0){
	echo "<BR><center>";
	echo"<TABLE>";
	echo"<TR >";
	echo"<TD ><img src = images/qus.jpg width=50 height=50></TD>";
	echo"<TD>";
	echo "Are you sure that you want to delete a Business Card?";
	echo "<br><br>";
	echo"</TD>";
	echo"</TR>";
	echo"<TR><TD  colspan=2><BR><BR></TD></TR>";
	echo"<TR><TD colspan=2>";
	echo "<center>";
	echo "<form method=\"post\" action=\"del.php?id=".$_GET['id']."\">";
	echo "<input type=\"submit\" value=\"Yes\" name =\"s1\"> ";
	echo "<input type=\"submit\" value=\"No\" name = \"s2\"> ";
	echo "</form>";
	echo"</TD></TR>";
	echo"</TABLE>";
}
if($input==1){
	$host = "localhost";
	$username = "it57160284";
	$password = "it57160284";
	$db = "it57160284";

	$conn = new mysqli($host,$username,$password,$db);
	$conn ->query("set name utf8");
	if($conn ->connect_error){
		die('Connect error!');
	}else{
		$id = $conn->real_escape_string($_GET['id']);
		$sql = "DELETE FROM NameCard WHERE id = $id";
		$conn ->query($sql);
		echo"Delete a  business card success.";
		echo"<meta http-equiv='refresh' content='0;URL=index.php'>";
	}
}
if($input==2){
	echo "Cancel to delete a business card .";
	echo "<meta http-equiv='refresh' content=0;URL=index.php>";
}

