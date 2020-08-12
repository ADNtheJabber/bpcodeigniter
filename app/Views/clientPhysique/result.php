<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<div class="container" style="margin:auto">

<?php if ($inserts != 0){ ?>
    <div class="card bg-success text-center" style="width: 400px; height:auto; margin:auto">
        <div class="card-header" style="margin-top:30px;">
            Creation de Client
        </div>
        <div class="card-body">
            <p class="card-text">Le client a été créé avec succès !</p>
            <a href="<?php echo base_url('ClientPhysique/index');?>" class="btn btn-primary">Ajouter un client</a>
            <a href="<?php echo base_url('ClientPhysique/liste');?>" class="btn btn-info">Voir la liste</a>
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
        <div class="card-body">
            <p class="card-text">Erreur, Le client n'a pas été créé !</p>
            <a href="<?php echo base_url('ClientPhysique/index');?>" class="card-link">Ajouter un client</a>
            <a href="<?php echo base_url('ClientPhysique/liste');?>" class="card-link">Voir la liste</a>
        </div>
        <div class="card-footer text-muted" style="background: red;">
            
        </div>
    </div>
<?php } ?>	
<?php include_once '../bpcodeigniter/app/Views/templates/footer.php';?>
