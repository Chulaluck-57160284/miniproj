<HTML>
	<meta charset = "UTF-8">
	<HEAD>
		<TITLE>Business cards</TITLE>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			body {
				font-family: 'JasmineUPC';
				background:#222222;
				font-size: 14pt;
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
			.form-group{
				margin-left:180px;
				background: #555555;
				font:18pt JasmineUPC;
				border: 1px #555555 solid;
				width: 50%; 
				height: 7%;
			}
		</style>
		</HEAD>
	<BODY>
	<?php
	$host = "localhost";
	$username = "it57160284";
	$password = "it57160284";
	$database = "it57160284";
	$conn = mysqli_connect($host,$username,$password,$database);
	mysqli_query("SET NAMES UTF8");
	$conn ->query($sql,$link);
	$result = $conn->query($sql);
	?>
			<img src = images/BCard.PNG width=100% height = 35%>
		    <h1>Get in touch</h1>
			<p>In order to get in touch use the contact form below:</p>	
			&nbsp;&nbsp;&nbsp;&nbsp;
				<form method="post" action="doadd.php" >
				<INPUT TYPE="hidden" NAME="id" value="<?php echo $id?>">
				<input type="text" NAME="Name"  placeholder="What is your name ?" 
					style = "text-transform:uppercase"<div class="form-group"></div><br>
				<input type="text" NAME="THname"  placeholder="ชื่อ-นามสกุล" 
					<div class="form-group"></div><br>
				<input type="text" NAME="Position" placeholder="What is your position ?" 
					<div class="form-group"></div><br>
				<input type="text" NAME="Mobile" placeholder="What is your mobile number ?" 
					<div class="form-group"></div><br>
				<input type="text" NAME="Phone" placeholder="What is your phone number?"
					<div class="form-group"></div><br>
				<input type="text" NAME="Fax" placeholder="What is your fax number? *ถ้าไม่มีให้ใส่ว่า 'ไม่มี'*" 
					<div class="form-group"></div><br>
				<input type="text" NAME="Email" placeholder="What is your email address ?" 
					<div class="form-group"></div><br>
				<textarea name="Address" rows="4" cols="91" wrap="physical" 
					placeholder="Where is your office ?" <div class="form-group"></textarea></div><br>
				<input type="submit" NAME="Submit us" style="background: #00FFFF;border: 1px #00FFFF solid;width: 120; height: 40;color:white;margin: 5px 700px"></div></span>
				</form>	
	</BODY> 
</HTML>