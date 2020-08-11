<?php include_once '../bpcodeigniter/app/Views/templates/header.php';?>

<!-- CONTENT -->

<div class="container">

            <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:40px; width: 1000px; margin-left: 30px;">
                <div class="panel panel-info">
                    <div class="panel-heading">Banque du Peuple</div>
                    <div class="panel-body">
                        <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                            Liste des clients moraux
                        </div>
                        {if isset($clientsM)}
                            {if $clientsM != null}
                                <table class="table table-bordered table-stripped">
                                    <tr>
                                        <th>Identifiant</th>
										<th>Nom</th>
										<th>Raison Sociale</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Email</th>
                                    </tr>
                                    {foreach from=$clientsM item=client}
                                        <tr>
                                            <td>{$client->getId()}</td>
											<td>{$client->getNom()}</td>
											<td>{$client->getRaisonSociale()}</td>
                                            <td>{$client->getAdresse()}</td>
                                            <td>{$client->getTel()}</td>
                                            <td>{$client->getEmail()}</td>                                        
                                        </tr>
                                    {/foreach}
                                </table>
                            {else}
                                Liste vide
                            {/if}
                        {/if}
                    </div>
                    <a href="{$url_base}Welcome/index">Accueil</a>
                </div>
            </div>
            
        </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<?php include_once '../bpcodeigniter/app/Views/templates/footer.php';?>
