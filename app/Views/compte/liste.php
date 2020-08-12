<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<div class="container">
    
    <div class="panel-body"><h3>Liste des Comptes</h3></div>
    <br />
    <button class="btn btn-success"><a href="<?php echo base_url('Compte/index');?>" style="color: white;">Ajouter un Compte</a></button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>numero</th>
                    <th>Solde</th>
                    <th>remuneration</th>
                    <th>agios</th>
                    <th style="width:80px;">Action</th>
        </tr>
      </thead>

      <tbody>
            <?php foreach($comptes as $compte){?>
                <tr>
                    <td><?php echo $compte->id;?></td>
                    <td><?php echo $compte->typeCompte;?></td>
                    <td><?php echo $compte->numCompte;?></td>
                    <td><?php echo $compte->solde;?></td>
                    <td><?php echo $compte->remuneration;?></td>
                    <td><?php echo $compte->agios;?></td>
                    <td>
                        <button class="btn btn-danger" onclick="delete_compte(<?php echo $compte->id;?>)">Supprimer</button>
                    </td>
                </tr>
            <?php }?> 
      </tbody>

    </table>
 
  </div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
 
 
  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    
    function delete_compte(id)
    {
      if(confirm('Etes-vous sùr?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('Compte/delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Erreur lors de la suppression !');
            }
        });
 
      }
    }
 
  </script>
 
  
  <?php include_once '../bpcodeigniter/app/Views/templates/footer.php';?>