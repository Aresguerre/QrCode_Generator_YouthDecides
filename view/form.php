<html>
	<head>
		<title>Formulaire</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Compiled and minified CSS -->
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
      	<!--Let browser know website is optimized for mobile-->
      		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    		<link rel="stylesheet" type="text/css" href="style/style.css">
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
				formatSubmit: 'yyyy-mm-dd'
			  });
		  	  $('.parallax').parallax();
		  	});
		  
		  </script>
		  <script type="text/javascript" src="js/script.js"></script>
		 
		  <div class="navbar-fixed">
			<nav>
		    <div class="nav-wrapper ">
		      <a href="#!" class="brand-logo"><img src="images/Youth Decides.png" height="100%"></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="http://www.youthdecides.org/">Youthdecides.org</a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="http://www.youthdecides.org/">Youthdecides.org</a></li>
		      </ul>
		    </div>
		
		</nav>

		</div>
		<section id="home">
			<div class="content">
				<h1>Youth Decides</h1>
				<h1>dddddddddd</h1>
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
							<div class="input-field col s6">
						          <input id="adresse" type="text" class="validate" name="adresse" required>
						          <label for="adresse">Adresse</label>
					        </div>
					        <div class="input-field col s3">
						          <input id="zipcode" type="text" class="validate" name="zipcode" required>
						          <label for="zipcode">Code postal</label>
					        </div>
					        <div class="input-field col s3">
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
							      <div class="btn">
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
									      <label for="junior">Junior(30dt)</label>
									    </p>
									</div>
									<div class="row">
										<p>
									      <input name="statut" type="radio" id="senior" value="senior" />
									      <label for="senior">Senior(100dt)</label>
									    </p>
									</div>
									<div class="row">
										<p>
									      <input name="statut" type="radio" id="sponsor" value="sponsor" />
									      <label for="sponsor">Sponsor(500Dt)</label>
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
		                            <input type="checkbox" id="newsletter" name="newsletter" value="1"checked/>
		                            <label for="newsletter">J'accepte de recevoir d'emails de la part de Youth Decides</label>
	                            </p>
							</div>
							<div class="row">
								<p>
		                            <input type="checkbox" id="terms" required/>
		                            <label for="terms"><a href="#">Terms&Services</a></label>
	                            </p>
							</div>
							<button class="btn waves-effect waves-light" type="submit" name="action" onclick="formsubmit()">Get the Card</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>