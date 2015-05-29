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
		<!-- <nav>
		</nav> -->
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<form action="addClient.php" method="POST">
						<label>Prénom : </label>
						<input type="text" name="prenom" required>
						<br>
						<label>Nom : </label>
						<input type="text" name="nom" required>
						<br>
						<label>CIN : </label>
						<input type="text" name="cin" required>
						<br>
						<label>Sexe : </label>
						<input type="radio" name="sexe" value="Homme" checked>
							<label>Homme</label>
						<input type="radio" name="sexe" value="Femme">
							<label>Femme</label>
						<br>
						<label>Date de Naissance : </label>
						<input type="calendar" name="date_naissance" required>
						<br>
						<label>Adresse : </label>
						<!-- <input type="Adress" name> -->
						<br>
						<label>E-Mail : </label>
						<input type="email" name="email">
						<br>
						<label>Photo : </label>
						<input type="file" name="photo" class="btn">
						<br>
						<label></label>
						<input type="checkbox" name="inclusion" value="politique">
						<label>Inclusion Politique</label>
						<br>
						<input type="checkbox" name="inclusion" value="economique">
						<label>Inclusion Economique</label>
						<br>
						<input type="checkbox" name="inclusion" value="sociale">
						<label>Inclusion Sociale</label>
						<br>
						<input type="checkbox" name="inclusion" value="culturelle">
						<label>Inclusion Culturelle</label>
						<br>
						<input type="checkbox" name="inclusion" value="technologique">
						<label>Inclusion Technologique</label>
						<br>
						<input type="submit" value="Go !">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>