<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<div class="container justify-content-center" style="margin: auto;">
			<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">
							<h3 class="panel-title" style="text-transform: uppercase;"><i class="fa fa-money"></i>  Formulaire de creation de Compte</h3>
							</div>
						<div class="panel-body">panel body</div>
							<form method="POST" action="<?php echo base_url('Compte/add');?>" id="formCompte">
								
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<select class="custom-select form-control input-sm" name="typeCompte" id="typeCompte">
												<option value="0" selected>Choisir le type de Compte</option>
												<option value="1">Compte Courant</option>
												<option value="2">Compte Epargne et Xewel</option>
												<option value="3">Compte Bloque</option>
											  </select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control input-sm" name="numeroCompte" id="numeroCompte" placeholder="Numero de Compte"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" class="form-control input-sm" name="fraisOuverture" id="fraisOuverture" placeholder="Frais d'Ouverture"/>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="depotInitial" id="depotInitial" class="form-control input-sm" placeholder="Depot initial"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="remuneration" id="remuneration" class="form-control input-sm" placeholder="Remuneration Annuelle"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="number" name="agios" id="agios" class="form-control input-sm" placeholder="Agios"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="cni">Date d'Ouverture</label>
											<input type="date" name="dateOuverture" id="dateOuverture" class="form-control input-sm" placeholder="date d'Ouverture"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="cni">Date de Deblocage</label>
											<input type="date" name="dateDeblocage" id="dateDeblocage" class="form-control input-sm" placeholder="date de Deblocage"/>
										</div>
									</div>
								</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<label for="cni">client associé</label><br>
											<button class="btn" id="entreprisebtn"><i class="fa fa-building"></i> Entreprise</button>
											<button class="btn" id="physiquebtn"><i class="fa fa-user-circle"></i> Particulier</button>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">										
											
										<input type="text" class="form-control input-sm" name="searchEntreprise" id="searchEntreprise"  onkeyup="searchValidEntreprise()" placeholder="saisir le numero de ninea"/>
										
                                    	<input type="text" class="form-control input-sm" name="searchPhysique" id="searchPhysique"  onkeyup="searchValidPhysique()" placeholder="saisir le numero de cin"/>
									</div>
									<div id="result">
            
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
    </div>

<?php include_once '../bpcodeigniter/app/Views/templates/footer.php';?>
