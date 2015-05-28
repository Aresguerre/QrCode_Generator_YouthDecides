<html>
	<head>
		<title>Formulaire</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	</head>
	<body>
		<nav>
		</nav>
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
	</body>
</html>