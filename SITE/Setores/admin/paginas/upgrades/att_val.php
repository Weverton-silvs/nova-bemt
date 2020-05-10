
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Área de Cadastro</h4>
                                                  <?php
                                                  $id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
                                    //echo $id;
                                    $select = "SELECT * FROM tb_valores WHERE id_val = :id ";
                                    try{
                                      $resultado = $con->prepare($select);
                                      $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                                      $resultado ->execute();
                                      $contar = $resultado->rowCount();
                                      if($contar > 0){
                                        while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                                          $id = $show->id_val;
                                          $titulo = $show->titulo1;
                                          $subtitulo = $show->texto1;



                                        }
                                      }else{
                                      echo '<div class="alert alert-danger"><strong>Aviso!</strong> Não há dados com ID :( </div>';
                                      }
                                    }catch(PDOException $e){
                                      echo "<b>Erro de PDO NO select: </b>".$e -> getMessage();
                                    }

                                    //atualizando Dados
                                    if(isset($_POST['Atualizar'])){
                                    $titulo = $_POST['titulo'];
                                    $subtitulo = $_POST['subtitulo'];


                                    $update = "UPDATE tb_valores SET titulo1=:titulo,texto1=:subtitulo WHERE id_val =:id";
                                    try{
                                      $result = $con->prepare($update);
                                      $result ->bindValue(':id',$id,PDO::PARAM_INT);
                                      $result ->bindValue(':titulo',$titulo,PDO::PARAM_STR);
                                      $result ->bindValue(':subtitulo',$subtitulo,PDO::PARAM_STR);



                                      $result ->execute();
                                      $contar = $result->rowCount();
                                      if ($contar>0) {
                                                  echo "<div class='alert alert-success' role='alert'><strong>Atualizado com sucesso!</strong> Dados ok :)</div>";

                                                }else{
                                                  echo "<div class='alert alert-danger' role='alert'><strong>Erro ao Atualizar!</strong> os dados :(</div>";
                                                }
                                              }catch(PDOException $e){
                                                echo "<b>ERRO DE UPDATE: </b>".$e->getMessage();
                                              }
                                }

                                    ?>
                                                  <form method="post" action="" enctype="multipart/form-data">
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Título</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" name="titulo" value="<?php echo $titulo;?>" id="titulo" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Subtitulo</label>
                                                              <div class="col-sm-10">
                                                                  <textarea rows="5" cols="5" name="subtitulo" id="subtitulo"class="form-control" placeholder="Digite aqui..."><?php echo $subtitulo;?></textarea>
                                                              </div>
                                                          </div>
                                                      <button style="float:right;"name="Atualizar" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Atualizar</button>
                                                    </form>
                                            </div>

                                          </div>
                                        </div>







                                            <div class="col-lg-12">
                                              <!-- Basic table card start -->
                                              <div class="card">
                                                  <div class="card-header">

                                                  </div>
                                                  <div class="card-block table-border-style">
                                                      <div class="table-responsive table-hover">
                                                          <table class="table">
                                                              <thead>
                                                                  <tr>
                                                                      <th>#</th>
                                                                      <th>Título</th>
                                                                      <th>SubTítulo</th>
                                                                      <th>Edição</th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_valores ORDER BY id_val DESC LIMIT 1';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $id;?></th>
                                                                      <td><?php echo $titulo;?></td>
                                                                      <td><?php echo $subtitulo?></td>
                                                                      <td class="icon-btn">
                                                                        <a href="home.php?acaoadmin=cadval"class="btn btn-info btn-icon" title="Voltar"><i class="fa fa-reply"style="text-align:center"></i></a>
                                                                        <a href="paginas/delete/delPaginas.php?idDelval=<?php echo $mostrar ->id_val;?>" class="btn btn-danger btn-icon" title="Deletar"><i class="fa fa-trash"></i></a>
                                                                        <a class="btn btn-warning btn-icon waves-effect md-trigger" data-modal="modal-1"><i class="fa fa-eye"></i></a>

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
                                                                          <li><strong>Título:</strong> click on the button below to close the modal.</li>
                                                                          <li><strong>SubTítulo:</strong> click on the button below to close the modal.</li>
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
