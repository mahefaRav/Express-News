<section class="contact--us-area section-padding-100-0" style="margin-bottom: 100px; padding-top: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Articles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Ref.
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">categorie
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">titre
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">info
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">details
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">images
                                        </th>
										<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">date
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($output as $donnees)
                                    {
                                        ?>
                                        <tr>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="idarticle<?php echo $i; ?>"><?php echo($donnees['idarticle']); ?></td>
												<td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="idcategorie<?php echo $i; ?>"><?php echo($donnees['idcategorie']); ?></td>
												<td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="titre<?php echo $i; ?>"><?php echo($donnees['titre']); ?></td>
												<td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="info<?php echo $i; ?>"><?php echo($donnees['info']); ?></td>
												<td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="details<?php echo $i; ?>"><?php echo($donnees['details']); ?></td>
												<td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="image<?php echo $i; ?>"><?php echo($donnees['image']); ?></td>
												<td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="sortie<?php echo $i; ?>"><?php echo($donnees['sortie']); ?></td>
                                            <td class="center">
                                                <a href="#editProduitModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit" onclick="edit(<?php echo $i; ?>)">&#xE254;</i></a>
                                                <a href="#deleteProduitModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete" onclick="fafana(<?php echo $i; ?>)">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="editProduitModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo base_url(); ?>index.php?c=Admin&m=updateArticle">
                        <input type="hidden" name="id" id="idMisc" value="">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Articles</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Id Article</label>
                                <input name="idarticle" id="editIdarticle" type="text" class="form-control" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="form-control" name="idcategorie" id="editIdcategorie">
                                    <?php
                                    foreach ($listSch as $item)
                                    {
                                        ?>
                                        <option value="<?php echo $item['idcategorie']; ?>"><?php echo $item['nom'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
							<div class="form-group">
                                <label>Titre</label>
                                <input name="titre" id="editTitre" type="text" class="form-control">
                            </div>
							<div class="form-group">
                                <label>Info</label>
                                <input name="info" id="editInfo" type="text" class="form-control">
                            </div>
							<div class="form-group">
                                <label>Details</label>
                                <input name="details" id="editDetails" type="text" class="form-control">
                            </div>
							<div class="form-group">
                                <label>Sortie</label>
                                <input name="sortie" id="editSortie" type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="deleteProduitModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo base_url(); ?>index.php?c=Admin&m=deleteArticle">
                        <input type="hidden" name="id" id="idDept" value="">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Department</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p id="idProd">  </p>
                            <p class="text-warning"><small></small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function fafana(num)
            {
                var msg = "Are you sure, you want to delete "+document.getElementById("name" + num).innerHTML+"?";
                document.getElementById("idDept").value = document.getElementById("idarticle" + num).innerHTML;
                document.getElementById("idProd").innerText = msg;
            }
            function edit(num)
            {
                document.getElementById("editIdarticle").value = document.getElementById("idarticle" + num).innerHTML;
                document.getElementById("editIdcategorie").value = document.getElementById("idcategorie" + num).innerHTML;
                document.getElementById("editTitre").value = document.getElementById("titre" + num).innerHTML;
                document.getElementById("editInfo").value = document.getElementById("info" + num).innerHTML;
                document.getElementById("editDetails").value = document.getElementById("details" + num).innerHTML;
                document.getElementById("editSortie").value = document.getElementById("sortie" + num).innerHTML;
               
            }
        </script>
    </div>
</section>