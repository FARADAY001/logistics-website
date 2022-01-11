<?php include 'head.php' ?>
	<body data-scrolling-animations="true">
        <div class="sp-body">
			
<?php include 'header.php' ?>	
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>NOS CONTACTS ET LOCALISATION</h1></a>
					<div class="pull-right">
						<a href=""><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Nos contacts</a>
					</div>
				</div>
			</div>

			<iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127119.26222333536!2d-4.0645722!3d5.343924!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sfr!2sci!4v1641610766183!5m2!1sfr!2sci"></iframe>

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>Siège de l'entreprise</h4>
						<p>Chaque jour est un nouveau jour pour nous et nous travaillons très dur pour satisfaire nos clients partout dans le monde.</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							
							
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>NK Logistics and and Sourcing</strong><br>Abidjan Côte d'ivoire</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+225 07 5892 5632 </div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+225 724 795 342 </div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>info@nk.com</div>
							</div>
							
						</div>
						<br><br><hr><br>
						
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>Envoyez-nous un message</h4>
                        
				<?php
                    if(isset($_GET['response1'])){	
                    @$response1 = $_GET['response1'];
                ?>
                <div class="col-md-12" >
			         <div class="alert alert-success display" id="msg">
                    <span class="glyphicon glyphicon-ok"></span> <?php echo "".$response1.""; ?>
                    </div>
				</div>
				<?php } ?>
						<p>Nous sommes là pour répondre à toutes les questions que vous pourriez avoir sur nos expériences. N'hésitez pas à nous contacter et nous vous répondrons dès que possible.</p>
						<div id="success"></div>
						<form  method="post"  action="send-email.php" class=" form-inline">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="form-group default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="first_name" id="user-name" placeholder="Prénom" required="required">
									</div>
									<div class="form-group default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="email" id="user-email" placeholder="Adresse e-mail" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="form-group default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="last_name" id="user-lastname" placeholder="Nom">
                                        
									</div>
									<div class="form-group default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="telephone" id="user-phone" placeholder="Numéro">
									</div>
								</div>
							</div>
							<div class="form-group default-inp form-elem">
								<input type="text" name="subject" id="user-subject" placeholder="Sujet">
							</div>
							<div class="form-group form-elem default-inp">
								<textarea id="comments" name="comments" placeholder="Message"></textarea>
							</div>
							<div class="form-action form-elem">
                                <button type="submit" name="submit" class="btn btn-success"> Envoyer </button>
                            </div>
						</form>
					</div>
				</div>
			</div>

			<?php include 'footer.php' ?>
		</div>

		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!--
		<script src="assets/contact/jqBootstrapValidation.js"></script> 
		<script src="assets/contact/contact_me.js"></script>-->
		<!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	</body>

</html>