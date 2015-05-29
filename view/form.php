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
	<body>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     	<!-- Compiled and minified JavaScript -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
		  <script type="text/javascript">
		  $('.datepicker').pickadate({
    		selectMonths: true, // Creates a dropdown to control month
			selectYears: 15 // Creates a dropdown of 15 years to control year
			  });
		  </script>
		<!-- <nav>
		</nav> -->
		<div class="container">
			<div class="row">
				<div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3">
					<form action="addClient.php" method="POST" id="addClient" class="form">
						<div class="row">
							<div class="input-field col s12">
						          <input id="prenom" type="text" class="validate" required>
						          <label for="prenom">Prenom</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						          <input id="nom" type="text" class="validate" required>
						          <label for="nom">Nom</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						          <input id="cin" type="text" class="validate" required>
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
							<input type="date" class="datepicker" id="date" required>
						</div>
						<div class="row">
							<div class="input-field col s6">
						          <input id="adresse" type="text" class="validate" required>
						          <label for="adresse">Adresse</label>
					        </div>
					        <div class="input-field col s3">
						          <input id="zipcode" type="text" class="validate" required>
						          <label for="zipcode">Code postal</label>
					        </div>
					        <div class="input-field col s3">
						          <input id="ville" type="text" class="validate" required>
						          <label for="ville">Ville</label>
					        </div>
						</div>
						<div class="row">
							<div class="input-field col s12">
						          <input id="email" type="email" class="validate" required>
						          <label for="email">Email</label>
					        </div>
						</div>
						<div class="row">
							<div class="file-field input-field">
						    	<input class="file-path validate" type="text"/>
							      <div class="btn">
							        <span>Photo</span>
							        <input type="file"  required/>
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
	                            <input type="checkbox" id="newsletter"  checked/>
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
	</body>
</html>