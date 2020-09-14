<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head id="head">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bokonzi</title>
</head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">

<body id="body">
	<?php
	include("link/app.php");
	if (isset($_SESSION["usermail"])) {
	?>
		<style>
			header {
				display: none;
			}
		</style>
	<?php

	} else {
	?>
		<style>
			section {
				display: none;
			}
		</style>
	<?php
	}
	?>

	<style>
		:root {
			--bodycolor: #332e71;
		}

		.options,
		.options2 {
			display: flex;
			width: 80%;
			margin: auto;
			justify-content: space-around;
			border-bottom: 1px solid rgba(0, 0, 0, 0.2);
		}

		.display_none {
			display: none;
		}

		.options2 {
			border-bottom: 1px solid rgba(0, 0, 0, 0);
			margin-top: 100px;
			text-align: center;
		}

		.options2 input {
			text-align: center;
			padding: 10px;
		}

		.fa-folder-plus,
		.fa-folder,
		.fa-search {
			font-size: 2em;
			padding: 1em;
		}

		.fa-folder-plus:hover,
		.fa-folder:hover,
		.fa-search:hover,
		.fa-plus-circle:hover {
			cursor: pointer;
		}

		.inputs {
			display: flex;
			justify-content: space-around;
			text-align: center;
			margin-top: 50px;
		}

		.inputs input {
			width: 90%;
		}

		.valider {
			background-color: var(--bodycolor);
			text-align: center;
			width: 30%;
			transition: 1s all;
			margin-top: 15px;
			padding: 10px;
			color: white;
			border: 1px solid #499c81;
			margin-left: 2.5%;
		}

		.pages {
			width: 60%;
			margin: auto;
			margin-top: 25px;
		}

		.pages b {
			padding: 10px;
			margin-right: 2px;
			border: 1px solid var(--bodycolor);
			transition: 1.5s all;
		}

		.pages b:hover {
			cursor: pointer;
			background-color: var(--bodycolor);
			color: white;
			transition: 0.5s all;
		}

		.add_folder {
			border: 1px solid var(--bodycolor);
			width: 60%;
			margin: auto;
			margin-top: 20px;
			text-align: center;
			color: var(--bodycolor);
			transition: 0.5s all;

		}

		.add_folder:hover {
			border: 1px solid var(--bodycolor);
			color: white;
			background-color: var(--bodycolor);
			transition: 1s all;
			cursor: pointer;
		}

		.valider:hover {
			cursor: pointer;
			background-color: #499c81;
			border: 1px solid var(--bodycolor);
			;
			transition: 1s all;
			cursor: pointer;
		}

		.select2 div {

			padding: 15px;
			color: white;
			border: 2px solid var(--bodycolor);
			color: var(--bodycolor);
			transition: 2s all;
		}

		.select2 div:hover {

			padding: 15px;
			color: white;
			background-color: var(--bodycolor);
			color: var(--bodycolor);
			transition: 0.5s all;
			color: white;
			cursor: pointer;
		}
		.nom_datas {
			cursor: pointer;
			text-align: center;
			margin-top: 50px;
		}
		body,
		input,
		::placeholder {
			color: #332e71;
		}
		input {
			border: 1px solid #332e71;
			padding: 15px;
			margin: 4px;
		}
		#recherche {
			border: 1px solid rgba(0, 0, 0, 0.2);
		}
		.fa-plus-circle:hover {
			cursor: pointer;
		}
		@media screen and (max-width: 1280px) {

			.options,
			.options2 {
				width: 100%;
			}
			.liste_produit_nom div {
				border: 2px solid var(--bodycolor);
				width: 70%;
				margin: auto;
				margin-top: 50px;
			}
			.liste_produit_nom {
				font-size: 1.2em;
			}
			.inputs input {
				width: 90%;
			}
			.options2 {

				margin-top: 50px;

			}
		}
	</style>


	<script>
		function link_pages(_this) {
			var link_pages = new Information("class/php/link_page_recup.php"); // création de la classe 
			link_pages.add("id", _this.id); // ajout de l'information pour lenvoi 
			console.log(link_pages.info()); // demande l'information dans le tableau
			link_pages.push(); // envoie l'information au code pkp 
			setTimeout(function() {
				ajax("selector0", "class/php/select_list_click.php");
				console.log("ok");
			}, 400);
			// doc 
		}
		function ajax(id, source) {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(id).innerHTML =
						this.responseText;
				}
			};
			xhttp.open("GET", source, true);
			xhttp.send();
		}

		function click_select_list(_this) {
		//	alert(_this.id) ; 
		//document.getElementById("plus"+_this.id).className="display_none" ; 
		var control = document.getElementById("plus_"+_this.id).className ; 
		if(control=="display_none"){
					document.getElementById("plus_"+_this.id).className="";
		}
		else{
			document.getElementById("plus_"+_this.id).className="display_none";
		}
		}
 	</script>
<style>
	.power_on{
		background-color: var(--bodycolor);
		padding: 30px;
		color:white; 
	}
</style>
</body>

</html>