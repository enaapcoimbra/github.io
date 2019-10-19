<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
  	<title>ENAAP COIMBRA 2020</title>
  	<meta name="description" content="">
	<meta name="author" content="">
	
    <!-- Mobile Specific Metas –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('assets/php/send_form_email.php') ?>
	<!-- CSS –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!--link rel="stylesheet" href="../assets/puglins/fontawesome/web-fonts-with-css/css/fontawesome-all.css"-->
	<link rel="stylesheet" href="../assets/css/normalize.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- JSS –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script src="https://use.fontawesome.com/cb232bfbf5.js"></script>
	<script src="https://kit.fontawesome.com/700cbf7552.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="/assets/js/functions.js"></script>
</head>
<body id="page">
	<!-- Menu ––––––––––––––––––––––––––––––––––––––––––––––––––-->
	<div class="header-container">
		<header class="clearfix">
			<div class="container">
				<div class="logo-box">
					<p class="site-title">
                        <img id="IMG2" src="../assets/img/13.png">
					</p>
				</div>
				<div class="nav-fostrap">
					<ul>
						<li><a href="../index.html">Home</a></li>
						<li>
							<a href="../html/Oradores.html"> Oradores</a>
						</li>
						<li>
							<a href="../html/Contactos.html" >Contactos</a>
						</li>
						<li>
							<a href="../html/Programa.html" >Programa</a>
						</li>
						<li>
							<a href="../html/Inscrições.html" >Inscrições</a>
						</li>
					</ul>
				</div>
				<div class="nav-bg-fostrap">
					<div class="nav-div-fostrap">
						<div class="navbar-fostrap">
							<span ></span>
						</div>	
					</div>
					<a id="homeMobile" class="site-text-logo title-mobile" href="index.html">ENAAP COIMBRA</a>
				</div>

			</div>
		</header>
	</div>
	
	<!-- Conteudo ––––––––––––––––––––––––––––––––––––––––––––––––––-->
	<div class="main-container">
        <img id="IMG1" src="../assets/img/12.jpg">
		<div class="main wrapper clearfix">
			<section class="onepage-section">
				<div class="entry-content">
					<div class="section-title-area">
                       
					</div>
					<div class="section-desc">
						<form name="contactform" method="post" action="send_form_email.php">
							<table width="450px">
							<tr>
							 <td valign="top">
							  <label for="first_name">First Name *</label>
							 </td>
							 <td valign="top">
							  <input  type="text" name="first_name" maxlength="50" size="30">
							 </td>
							</tr>
							<tr>
							 <td valign="top"">
							  <label for="last_name">Last Name *</label>
							 </td>
							 <td valign="top">
							  <input  type="text" name="last_name" maxlength="50" size="30">
							 </td>
							</tr>
							<tr>
							 <td valign="top">
							  <label for="email">Email Address *</label>
							 </td>
							 <td valign="top">
							  <input  type="text" name="email" maxlength="80" size="30">
							 </td>
							</tr>
							<tr>
							 <td valign="top">
							  <label for="telephone">Telephone Number</label>
							 </td>
							 <td valign="top">
							  <input  type="text" name="telephone" maxlength="30" size="30">
							 </td>
							</tr>
							<tr>
							 <td valign="top">
							  <label for="comments">Comments *</label>
							 </td>
							 <td valign="top">
							  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
							 </td>
							</tr>
							<tr>
							 <td colspan="2" style="text-align:center">
							  <input type="submit" value="Submit">   <a href="#">Email Form</a>
							 </td>
							</tr>
							</table>
						</form>
					</div>
				</div>
            </section>
		</div>	
	</div>
	
	<!-- Footer ––––––––––––––––––––––––––––––––––––––––––––––––––-->
	<div class="footer-container">
		<footer class="site-footer">
			<div class="site-info">
				<div class="btt">
					<a id="back-to-top" href="#" class="back-to-top" title="Back To Top">
						<i class="fas fa-angle-double-up"></i>
					</a>
				</div>
                <a href="https://www.facebook.com/appfuturo.listaf/"><i id="fb" class="fab fa-facebook fa-3x"></i></a>
				<a href="https://www.instagram.com/enaap_coimbra2020/"><i id="ig" class="fab fa-instagram fa-3x"></i></a>
				<a id="email" href="mailto:enaapcoimbra@gmail.com">Dúvidas? Consulta-nos</a>
			</div>
		</footer>
	</div>
</body>
</html>
