<?php if ($resultat[0] != 0){ ?>
    <div class="card bg-success">
        <div class="card-body">
            <h4 class="card-title">Creation de Client</h4>
            <p class="card-text">Le client a été créé avec succès !</p>
            <a href="<?php echo base_url('ClientPhysique/index');?>" class="card-link">Ajouter un client</a>
            <a href="<?php echo base_url('ClientPhysique/liste');?>" class="card-link">Voir la liste</a>
        </div>
    </div>
<?php } 
    else {?>
    <div class="card bg-danger">
        <div class="card-body">
            <h4 class="card-title">Creation de Client</h4>
            <p class="card-text">Erreur, Le client n'a pas été créé !</p>
            <a href="<?php echo base_url('ClientPhysique/index');?>" class="card-link">Ajouter un client</a>
            <a href="<?php echo base_url('ClientPhysique/liste');?>" class="card-link">Voir la liste</a>
        </div>
    </div>
<?php } ?>
