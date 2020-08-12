<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<!-- CONTENT -->

<div class="container justify-content-center" style="margin: auto;">
			<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">
							<h3 class="panel-title" style="text-transform: uppercase;"><i class="fa fa-user-circle"></i>  Formulaire de creation de Client Entreprise</h3>
							</div>
                            <div class="panel-body"></div>
                            
							<form method="POST" action="<?php echo base_url('ClientMoral/add');?>" id="formClientMoral">
			
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="nom" id="nom" placeholder="Nom de l'Entreprise"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="raisonSociale" id="raisonSociale" placeholder="Raison sociale"/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="email" id="email" placeholder="Email"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" class="form-control input-sm" name="tel" id="tel" placeholder="Telephone"/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="adresse" id="adresse" class="form-control input-sm" placeholder="Adresse"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="ninea" id="ninea" class="form-control input-sm" placeholder="Ninéa"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="registreCommerce" id="registreCommerce" class="form-control input-sm" placeholder="Registre de Commerce"/>
										</div>
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
