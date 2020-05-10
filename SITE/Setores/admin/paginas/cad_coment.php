
                                        <div class="row">


                                            <div class="col-lg-12">
                                              <!-- Basic table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Comentários Cadastraos</h5>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                              <thead>
                                                                  <tr>
                                                                      <th>1</th>
                                                                      <th>Título</th>
                                                                      <th>SubTítulo</th>
                                                                      <th>Comentario</th>
                                                                      <th>Status</th>
                                                                      <th>Edição</th>
                                                                      <th>Exibir</th>

                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_comentario ORDER BY id_comentario DESC';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $mostrar ->id_comentario;?></th>
                                                                      <td><?php echo $mostrar ->nome;?></td>
                                                                      <td><?php echo $mostrar ->sobrenome;?></td>
                                                                      <td><?php echo $mostrar ->comentario;?></td>
                                                                      <td><?php
                                                                      if ($nivel = $mostrar->nivel == 1) {
                                                                      echo "<span class='badge badge-success badge-pill'>Exibindo</span>";
                                                                    }else {
                                                                      echo "<span class='badge badge-warning badge-pill' style='color:#fff;'>Não Exibindo</span>";
                                                                    }
                                                                      ?></td>
                                                                      <td class="icon-btn">

                                                                        <a href="paginas/delete/delPaginas.php?idDelcoment=<?php echo $mostrar ->id_comentario;?>" class="btn btn-danger btn-icon" title="Deletar" ><i class="fa fa-trash" style="margin-top:10px;"></i></a>

                                                                      </td>
                                                                      <td class="icon-btn">
                                                                      <a href="paginas/exibir/exbComent.php?idComent=<?php echo $mostrar ->id_comentario;?>"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Exibir</a>
                                                                      <a href="paginas/exibir/exbComentremove.php?idComentremove=<?php echo $mostrar ->id_comentario;?>"class="btn btn-danger btn-round"><i class="icofont icofont-close"></i>Remover</a>
                                                                      </td>

                                                                  </tr>
                                                                  <?php
                                                                          //FIM
                                                                          }
                                                                          }else{
                                                                          echo '<div class="alert alert-danger"><button type = "button"
                                                                          class="close" data-dismiss="alert">x</button><strong>Aviso!</strong> Não há Serviços cadastrados :( </div>';
                                                                          }
                                                                          }catch(PDOException $e){
                                                                          echo 'ERRO DE SELECT DO PDO: '.$e;
                                                                          }
                                                                          ?>
                                                              </tbody>

                                                          </table>


                                                          <div class="md-modal md-effect-1" id="modal-1">
                                                              <div class="md-content" style="background:#000;">
                                                                  <h3>Modal Dialog</h3>
                                                                  <div>
                                                                      <ul>
                                                                          <li><strong>Nome:</strong> click on the button below to close the modal.</li>
                                                                          <li><strong>Sobrenome:</strong> click on the button below to close the modal.</li>
                                                                          <li><strong>Comentário:</strong> click on the button below to close the modal.</li>
                                                                      </ul>
                                                                      <button type="button" class="btn btn-primary waves-effect md-close">Close</button>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Basic table card end -->
                                            </div>

                                        </div>
