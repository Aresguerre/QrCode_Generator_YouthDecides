<html>
	<head>
		<title>Formulaire</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Compiled and minified CSS -->
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
      	<!--Let browser know website is optimized for mobile-->
      		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    		<link rel="stylesheet" type="text/css" href="style/style.css">
    		<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	</head>
	<body style="display:block">
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.4.min.js"></script>
     	<!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
		  <script type="text/javascript">
		  $( document ).ready(function(){
		  	 $(".button-collapse").sideNav();
		  	 $('.datepicker').pickadate({
    			selectMonths: true, // Creates a dropdown to control month
				selectYears: 60,
				max: new Date(2015,01,01),// Creates a dropdown of 15 years to control year
				formatSubmit: 'yyyy-mm-dd',
  				hiddenName: false
			  });
		  	  $('.scroll').click(function(){
		  	  	var scrollAncre = $(this).attr('data');
		  	  	var navHeight = $('nav').outerHeight();
		  	  	var scrollTo = $('section[id="'+scrollAncre+'"]').offset().top-navHeight ;
		  	  	$('body ,html').animate( {scrollTop: scrollTo} , 500) ;
		  	  });

		  	  $("#up").hide();
		  	   var topOfOthDiv = $(".page-footer").offset().top-$('.page-footer').outerHeight();
		  	  
		  	  
    			$(window).scroll(function() {
    				
    				
        			if($(window).scrollTop() > 1600) { //scrolled past the other div?
            			$("#up").show("slow"); //reached the desired point -- show div
        				}
        			else {
        				$("#up").hide("slow");
        			}
    			});
		  	});
		  
		  </script>
		  <script type="text/javascript" src="js/script.js"></script>
		 <?php include_once'navbar.php' ?>
		  
		<section id="home">
			<div class="container">
				<h1>Youth Decides</h1>
				<p class="flow-text">Notre carte a pour but de vous offrir des avantages qui vous faciliteront <br>
				les taches les plus simples de votre vie quotidienne comme par exemple:  <br>
				 un accés pas chèr a une salle de cinéma...</p>
				<a class="waves-effect waves-light btn scroll" href="#" data="form">Join Us<i class=" large mdi-navigation-expand-more"></i></a>
			</div>
			
		</section>
		<section id="form">
		<div class="container">
			<div class="row">
				<div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3">
					<form action="../controller/addClient.php" enctype="multipart/form-data" method="POST" id="addClient" class="form">
						<div class="row">
							<div class="input-field col s12">
						        <input id="prenom" type="text" class="validate" name="prenom" required>
						        <label for="prenom">Prenom</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						        <input id="nom" type="text" class="validate" name="nom" required>
						        <label for="nom">Nom</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						        <input id="cin" type="text" class="validate" name="cin" required>
						        <label for="cin">CIN</label>
					        </div>
						</div>
						<div class="row">
								<div class="col s6 m6 l6">
									<label>Sexe</label>
								</div>
								<div class="col s6 m6 l6">
									<div class="row">
										<p>
									      <input name="sexe" type="radio" id="homme" value="homme" checked/>
									      <label for="homme">Homme</label>
									    </p>
									</div>
									<div class="row">
										<p>
									      <input name="sexe" type="radio" id="femme" value="femme" />
									      <label for="femme">Femme</label>
									    </p>
									</div>
								</div>
							</div>
						<div class="row">
							<label for="date">Date de naissance</label>
							<input type="date" class="datepicker" id="date" name="date_naissance" required>
						</div>
						<div class="row">
							<div class="input-field col s12">
						          <input id="adresse" type="text" class="validate" name="adresse" required>
						          <label for="adresse">Adresse</label>
					        </div>
					    </div>
					    <div class="row">
					        <div class="input-field col s6">
						          <input id="zipcode" type="text" class="validate" name="zipcode" required>
						          <label for="zipcode">Code postal</label>
					        </div>
					        <div class="input-field col s6">
						          <input id="ville" type="text" class="validate" name="ville" required>
						          <label for="ville">Ville</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						          <input id="email" type="email" class="validate" name="email" required>
						          <label for="email">Email</label>
					        </div>
						</div>
						<div class="row">
							<div class="file-field input-field">
						    	<input class="file-path validate" type="text"/>
							      <div class="btn tooltipped" data-position="left" data-tooltip="Max:1Mo">
							        <span>Photo</span>
							        <input type="file" name="file"  id="file-select"required/>
							      </div>
						    </div>
						</div>
							
							<div class="row">
								<div class="col s6 m6 l6">
									<label>Statut</label>
								</div>
								<div class="col s6 m6 l6">
									<div class="row">
										<p>
									      <input name="statut" type="radio" id="junior" value="junior"  checked/>
									      <label for="junior">Junior(à partir de 30dt)</label>
									    </p>
									</div>
									<div class="row">
										<p>
									      <input name="statut" type="radio" id="senior" value="senior" />
									      <label for="senior">Senior(à partir de 100dt)</label>
									    </p>
									</div>
									<div class="row">
										<p>
									      <input name="statut" type="radio" id="sponsor" value="sponsor" />
									      <label for="sponsor">Sponsor(à partir de 500Dt)</label>
									    </p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s6 m6 l6">
									<label>Inclusion</label>
								</div>
								<div class="col s6 m6 l6">
									<div class="row">
										<p>
	                                    	<input type="checkbox" id="politique" name="inclusion[]" value="politique"/>
	                                        <label for="politique">Inclusion Politique</label>
	                                    </p>
									</div>
									<div class="row">
										<p>
	                                    	<input type="checkbox" id="economique" name="inclusion[]" value="economique"/>
	                                        <label for="economique">Inclusion Economique</label>
	                                    </p>
									</div>
									<div class="row">
										<p>
	                                    	<input type="checkbox" id="sociale" name="inclusion[]" value="social"/>
	                                        <label for="sociale">Inclusion Sociale</label>
	                                    </p>
									</div>
									<div class="row">
										<p>
	                                    	<input type="checkbox" id="culturelle" name="inclusion[]" value="culturelle"/>
	                                        <label for="culturelle">Inclusion Culturelle</label>
	                                    </p>
									</div>
									<div class="row">
										<p>
	                                    	<input type="checkbox" id="technologique" name="inclusion[]" value="technologique"/>
	                                        <label for="technologique">Inclusion Technologique</label>
	                                    </p>
									</div>
								</div>
							</div>
							<div class="row">
								<p>
		                            <input type="checkbox" id="newsletter" name="newsletter" value="oui"checked/>
		                            <label for="newsletter">J'accepte de recevoir d'emails de la part de Youth Decides</label>
	                            </p>
							</div>
							<div class="row">
								<p>
		                            <input type="checkbox" id="terms" required/>
		                            <label for="terms"><a href="#">Terms&Services</a></label>
	                            </p>
							</div>


								<button class="btn waves-effect waves-light" type="submit" name="action">Get the Card</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include_once'footer.php' ?>
	</body>
</html>