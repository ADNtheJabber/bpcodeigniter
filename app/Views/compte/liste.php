<div class="container">

            <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:40px; width: 1000px; margin-left: 30px;">
                <div class="panel panel-info">
                    <div class="panel-heading">Banque du Peuple</div>
                    <div class="panel-body">
                        <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                            Liste des Comptes
                        </div>
                        {if isset($comptes)}
                            {if $comptes != null}
                                <table class="table table-bordered table-stripped">
                                    <tr>
										<th>id du compte</th>
                                        <th>Numero de compte</th>
                                        <th>Type de compte</th>
                                        <th>Solde</th>
										<th>idProprietaire</th>
										<th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    {foreach from=$comptes item=compte}
                                        <tr>
											<td>{$compte->getId()}</td>
                                            <td>{$compte->getNumCompte()}</td>
                                            <td>{$compte->getTypeCompte()}</td>
                                            <td>{$compte->getSolde()}</td>
											<td>{$compte->getIdClientPhysique()}</td>
											<td><a href="{$url_base}Compte/details"><i class="fa fa-plus"></i> details</a></td>
                                            <td><a href="{$url_base}ClientPhysique/findById">Voir le proprietaire</a></td>                                        
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