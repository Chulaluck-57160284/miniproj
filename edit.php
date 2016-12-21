<HTML>	
	<HEAD>
		<TITLE>Business cards</TITLE>
		<meta charset="utf-8">
	</HEAD>
	<style>
		body {
			font-family: 'JasmineUPC';
			background:#222222;
			font-size: 100%;
			color : white;
		}
		h1 {
			font-family: 'JasmineUPC';
			font-size: 28pt;
			text-indent: 130pt;
			text-align: left;
			color : white;
		}
		p {
			text-indent: 130pt;
			font-family: 'JasmineUPC';
			font-size: 16pt;
			color : "white";
		}
		.body{
			background:#555555;
			font:18pt JasmineUPC;
			border: 1px #555555 solid;
			width: 120; 
			height: 40;
		}
		.form-group{
			margin-left:180px;
			background: #555555;
			font:18pt JasmineUPC;
			border: 1px #555555 solid;
			width: 50%; 
			height: 7%;
		}
	</style>
	<BODY>
		<?php
		$host = "localhost";
		$username = "it57160284";
		$password = "it57160284";
		$database = "it57160284";
		$conn = mysqli_connect($host,$username,$password,$database);//$conn=new mysqli($host,$username,$password,$db);
		$conn ->query("SET NAMES UTF8");//mysqli_query("SET NAMES UTF8");
		$conn ->query($sql,$link);
		$sql = "SELECT * FROM NameCard WHERE id = ".$_GET['id']."";
		$result = $conn->query($sql);
		$id =$_GET['id'];
		$row=$result->fetch_object();
		?>
		<img src = images/BCard.PNG width=100% height = 35%>
		<h1>Get in touch</h1>
		<p>In order to get in touch use the contact form below:</p>	 
		&nbsp;&nbsp;&nbsp;&nbsp;
		<form method="post" action="doedit.php?id=<?php echo $_GET['id']; ?>" >
			<input type="text" NAME="Name" value="<?php echo "$row->Name"; ?>" 
				placeholder="What is your name ?" style="text-transform: uppercase ;background: #555555;font:18pt JasmineUPC;border: 1px #555555 solid;width: 50%; height: 7%;margin-left:180px;"> 
			<br><br>
			<input type="text" NAME="THname" value="<?php echo "$row->THname"; ?>" 
				placeholder="ชื่อ-นามสกุล"   <div class="form-group"> 
			<br><br>
			<input type="text" NAME="Position" value="<?php echo "$row->Position"; ?>" 
				placeholder="What is your position ?"  <div class="form-group">
			<br><br>
			<input type="text" NAME="Mobile" value="<?php echo "$row->Mobile"; ?>" 
				placeholder="What is your mobile number ?"  <div class="form-group">
			<br><br>
			<input type="text" NAME="Phone" value="<?php echo "$row->Phone"; ?>" 
				placeholder="What is your phone number?"  <div class="form-group">
			<br><br>
			<input type="text" NAME="Fax" value="<?php echo "$row->Fax"; ?>" 
				placeholder="What is your fax number?  *ถ้าไม่มีให้ใส่ว่า 'ไม่มี'*" <div class="form-group">
			<br><br>
			<input type="text" NAME="Email" value="<?php echo "$row->Email";?>" 
				placeholder="What is your email address ?"  <div class="form-group">
			<br><br>
			<textarea name="Address" rows="4" cols="91" wrap="physical" 
				placeholder="Where is your office ?"<div class="form-group"><?php echo "$row->Address";?></textarea>
			<br><br>
			<input type="submit" NAME="Submit us" value"Edit" style="background: #00FFFF;border: 1px #00FFFF solid;width: 120; height: 40;color:white;margin: 5px 700px;"></span>
		</form>		
	</BODY>
</HTML>





