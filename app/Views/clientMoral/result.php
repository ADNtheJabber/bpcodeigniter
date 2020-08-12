<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<div class="container" style="margin-top: 70px;">
<?php if ($inserts != 0){ ?>
    <div class="card bg-success text-center" style="width: 400px; height:auto; margin:auto">
        <div class="card-header" style="margin-top:30px;">
            Creation de Client
        </div>
        <div class="card-body">
            <p class="card-text">Le client a été créé avec succès !</p>
            <a href="<?php echo base_url('ClientMoral/index');?>" class="card-link">Ajouter un client</a>
            <a href="<?php echo base_url('ClientMoral/liste');?>" class="card-link">Voir la liste</a>
        </div>
        <div class="card-footer text-muted" style="background: green;">
            
        </div>
    </div>
<?php } 
    else {?>
    <div class="card bg-danger text-center" style="width: 400px; height:auto; margin:auto">
        <div class="card-header" style="margin-top:30px;">
            Creation de Client
        </div>
            <p class="card-text">Erreur, Le client n'a pas été créé !</p>
            <a href="<?php echo base_url('ClientMoral/index');?>" class="card-link">Ajouter un client</a>
            <a href="<?php echo base_url('ClientMoral/liste');?>" class="card-link">Voir la liste</a>
        </div>
        <div class="card-footer text-muted" style="background: red;">
            
        </div>
    </div>
<?php } ?>

</div>
			
<?php include_once '../bpcodeigniter/app/Views/templates/footer.php';?>