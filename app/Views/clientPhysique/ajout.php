<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<!-- CONTENT -->

<div class="container justify-content-center" style="margin: auto;">
			<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">
							<h3 class="panel-title" style="text-transform: uppercase;"><i class="fa fa-user-circle"></i>  Formulaire de creation de Client Physique</i></h3>
							</div>
                            <div class="panel-body"></div>
                            
							<form method="POST" action="{$url_base}ClientPhysique/add" id="formClientPhysique">

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="SituationProfessionnelle">Situation professionnelle:</label>
												<button class="btn" id="salariebtn"><i class="fa fa-briefcase" aria-hidden="true"></i> Salarié</button>
												<button class="btn" id="nonsalariebtn"><i class="fa fa-money"></i> Non Salarié</button>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="nom" id="nom" placeholder="Nom" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="prenom" id="prenom" placeholder="Prenom" required/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="email" id="email" placeholder="Email" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" class="form-control input-sm" name="tel" id="tel" placeholder="Telephone" required/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="adresse" id="adresse" class="form-control input-sm" placeholder="Adresse" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="identifiant" id="identifiant" class="form-control input-sm" placeholder="Numero de la Carte Nationale d'Identité" required/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="profession" id="profession" class="form-control input-sm flexinput" placeholder="Profession" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="salaire" id="salaire" class="form-control input-sm flexinput" placeholder="Salaire actuel" required/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<textarea name="info_employeur" id="info_employeur" cols="30" rows="3" class="form-control input-sm flexinput" placeholder="Informations de l'employeur" required></textarea>										</div>
									</div>
								</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="submit" id="valider" name="valider" value="Valider" class="btn btn-success btn-block">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="reset" value="Annuler" class="btn btn-danger btn-block">
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<?php include_once '../bpcodeigniter/app/Views/templates/footer.php';?>
