
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title>Business cards</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 	<!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
     <![endif]-->
     <link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
     <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
     <!-- start plugins -->
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script>
     	$(function() {
     		var pull 	= $('#pull');
     		menu 		= $('nav ul');
     		menuHeight	= menu.height();
     		$(pull).on('click', function(e) {
     			e.preventDefault();
     			menu.slideToggle();
     		});
     		$(window).resize(function(){
     			var w = $(window).width();
     			if(w > 320 && menu.is(':hidden')) {
     				menu.removeAttr('style');
     			}
     		});
     	});
     </script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
	<div class="header_bg" id="home"><!-- start header -->
		<div class="container">
			<div class="row header text-center specials">
				<div class="h_logo">
					<a href="index.php"><img src="images/logo.png" alt="" class="responsive"/></a>
				</div>
				<nav class="top-nav">
					<ul class="top-nav nav_list">
						<li class="logo page-scroll"><a title="hexa" href="add.php"><img src="images/plus.png" alt="" class="responsive"/ width="10%" height="10%"></a></li>
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row slider">
			<div class="wmuSliderWrapper">
				<article style="position: relative; width: 100%;"> 
					<BR><BR><BR>
						<?php
						$host = "localhost";
						$username = "it57160284";
						$password = "it57160284";
						$database = "it57160284";
						$conn = mysqli_connect($host,$username,$password,$database);
						$conn -> query("SET NAMES UTF8");

						$sql = "SELECT * FROM NameCard ";
						$result = $conn->query($sql);
						$ee=0;
						echo "<table  class=one width=100% >";
						while($row = $result->fetch_object()){
							if($ee==0)echo "<tr>";
							$ee++;
							if($ee==4){
								echo "<tr><td>";
								$ee=1;
							}else{
								echo "<td>";
							}
							echo"<TABLE >";
								echo"<TR>";
								echo"<TD><a href = 'edit.php?id=".$row->id."'>
								<img src =images/edit.png width=7% height=3% align=right></a>"."
								<a href = 'del.php?id=".$row->id."'>
									<img src = images/Delete.jpg width=8% height=6% align=right></a>
								</TD>";
								echo"</TR>";
							echo"</TABLE>";
							echo"<TABLE class=two width=100% >";
							echo"<TR>";
							echo"<TD div class='htext' colspan=2><center>"."&nbsp;"."$row->Address"."</center></TD></div>";
							echo"</TR>";
							echo"<TR>";
							echo"<TD >";
							echo"<TABLE>";
							  echo"<TR><TD div class='text' colspan=2>"."&nbsp;Mobile: "."$row->Mobile"."</TD></div></TR>";
							  echo"<TR><TD div class='text' colspan=2>"."&nbsp;Phone: "."$row->Phone"."</TD></div></TR>";
							  echo"<TR><TD div class='text' colspan=2>"."&nbsp;Fax: "."$row->Fax"."</TD></div></TR>";
							  echo"<TR><TD div class='text' colspan=2>"."&nbsp;Email: "."$row->Email"."</TD></div></TR>";
							echo"</TABLE>";
							echo"</TD>";
							echo"<TD>";
							echo"<TABLE>";
							  echo"<TR><TD div class='text' >"."$row->Name"."</TD></div></TR>";
							  echo"<TR><TD div class='text'>"."$row->THname"."</TD></div></TR>";
							  echo"<TR><TD div class='text'>"."$row->Position"."</TD></div></TR>";				
							echo"</TABLE>";
							echo"</TD>";
							echo"</TR>";
							echo "</TABLE>";
							if($ee==3){
								echo "</td></tr>";
							}else{
								echo "</td>";
							}
						}
						echo "</table>";

						?>		
			</article>
		</div>
	</div>
</div>
<div class="footer_bg" id="contact"><!-- start footer -->
	<div class="footer1_bg" style{height=3%;}><!-- start footer1 --> 
		<div class="container">
			<div class="row  footer">
				<div class="copy text-center">
					<p class="link"><span>&#169; นางสาวจุฬาลักษณ์  วทนะรัตน์ 57160284 สาขาเทคโนโลยีสารสนเทศ คณะวิทยาการสารสนเทศ </a></span></p>
					<a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
			<script type="text/javascript">
				$(function() {
					$('a[href*=#]:not([href=#])').click(function() {
						if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

							var target = $(this.hash);
							target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
							if (target.length) {
								$('html,body').animate({
									scrollTop: target.offset().top
								}, 1000);
								return false;
							}
						}
					});
				});
			</script>
			<!---- start-smoth-scrolling---->		
		</div>
	</div>
</body>
</html>