<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<div class="container">
    
    <div class="panel-body"><h3>Liste des Clients Physiques</h3></div>
    <br />
    <button class="btn btn-success"><a href="<?php echo base_url('ClientPhysique/index');?>" style="color: white;">Ajouter un Client</a></button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>raison sociale</th>
                    <th>Adresse</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th style="width:80px;">Action</th>
        </tr>
      </thead>

      <tbody>
        
            <?php foreach($clients as $client){?>
                <tr>
                    <td><?php echo $client->id;?></td>
                    <td><?php echo $client->nom;?></td>
                    <td><?php echo $client->raisonSociale;?></td>
                    <td><?php echo $client->adresse;?></td>
                    <td><?php echo $client->email;?></td>
                    <td><?php echo $client->tel;?></td>
                    <td>
                        <button class="btn btn-danger" onclick="delete_client(<?php echo $client->id;?>)">Supprimer</button>
                    </td>
                </tr>
            <?php } ?> 
            
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
    
    function delete_client(id)
    {
      if(confirm('Etes-vous sùr?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('ClientMoral/delete')?>/"+id,
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