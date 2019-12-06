	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="eidyvemba">
		<meta name="description" content="empresa">
		<meta name="keywords" content="tecnologias,serviços,desenvolvimento">
		<meta charset="UTF-8">
		<title>SCS - Contactos</title>

		<?php include_once 'includes/header.php';?>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white"> SOARES COXE SOFTLUTION - Contactos	 </h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right">  </span>  <a href="contact.html"> Contactos</a></p>
						</div>	
					</div>
				</div>
			</section>

			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon"> <span class="lnr lnr-home"></span> </div>
								<div class="contact-details">
									<h5>Luanda, Bairro Kapolo I,Travessa nº 1</h5>
									<p>Prédio nº 3, 1ºAndar</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon"> <span class="lnr lnr-phone-handset"></span> </div>
								<div class="contact-details">
									<h5>(+244) 992 776 756 / 943 486 035</h5>
									<p>Seg a Sex das 9:00 às 18:00</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon"> <span class="lnr lnr-envelope"></span> </div>
								<div class="contact-details">
									<h5>geral@soarescoxetecnologias.com</h5>
									<p>Envie-nos sua consulta a qualquer momento!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" class="common-input mb-20 form-control" required="" type="text">									
										<input name="email" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="common-input mb-20 form-control" required="" type="email">
										<input name="subject" placeholder="Assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" class="common-input mb-20 form-control" required="" type="text">
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required=""></textarea>
										<button class="genric-btn primary circle mt-30" style="float: right;">Enviar</button>								
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<?php include_once 'includes/footer.php';?>