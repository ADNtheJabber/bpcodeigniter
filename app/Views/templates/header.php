<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="ADN"/>
    	<meta name="description" content="Projet BP: version samanemvc"/>
		<title>Banque du Peuple</title>

		<!-- l'appel de {$url_base} vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css');?>"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
	</head>
	<body>
		<header>
			<!--logo et nom banque-->
					<div class="logo">
						<img src="<?php echo base_url('public/images/bplogo.png');?>" alt="logo BP"/>
						<h2>Banque du Peuple</h2>
					</div>
			<!--end of logo et nom banque-->
			
			<!--nav-->               
				   <nav>
						<ul>
							<li><a href="">Accueil</a></li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn">Ajouter un client</a>
								<div class="dropdown-content">
								  <a href="<?php echo base_url('ClientPhysique/index');?>">Client Physique</a>
								  <a href="<?php echo base_url('ClientMoral/index');?>">Client Moral</a>
								</div>
							</li>
							<li><a href="<?php echo base_url('Compte/index');?>">Ajouter compte</a></li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn">Listes</a>
								<div class="dropdown-content">
								  <a href="<?php echo base_url('ClientPhysique/liste');?>">-Particuliers</a>
								  <a href="<?php echo base_url('ClientMoral/liste');?>">-Entreprises</a>
								  <a href="<?php echo base_url('Compte/liste');?>">-Comptes</a>
								</div>
							</li>
							<li><a href="<?php echo base_url('Virement/virer');?>">Virement</a></li>
							<li><a href="<?php echo base_url('Assistance/assister');?>">Assistance</a></li>
						</ul>
				   </nav>
			<!--end of nav--> 
		</header>