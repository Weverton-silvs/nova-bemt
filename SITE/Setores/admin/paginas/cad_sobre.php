
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Área de Cadastro</h4>
                                                  <form method="post" action="" enctype="multipart/form-data">
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Título</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Subtitulo</label>
                                                              <div class="col-sm-10">
                                                                  <textarea rows="5" cols="5" name="subtitulo" id="subtitulo"class="form-control" placeholder="Digite aqui..."></textarea>
                                                              </div>
                                                          </div>
                                                      <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
                                                    </form>
                                            </div>
                                            <?php
                                                          if(isset($_POST['cadBtn'])){
                                                          $titulo = $_POST['titulo'];
                                                          $subtitulo = $_POST['subtitulo'];



                                                          $insert = "INSERT INTO tb_apresentacao (titulo1_apr,subtitulo1_apr) VALUES (:titulo,:subtitulo)";
                                                          try {
                                                            $result = $con->prepare($insert);
                                                            $result ->bindParam(':titulo',$titulo,PDO::PARAM_STR);
                                                            $result ->bindParam(':subtitulo',$subtitulo,PDO::PARAM_STR);

                                                            $result->execute();

                                                            $contar = $result->rowCount();
                                                            if($contar>0){
                                                              echo '<div class="alert alert-success" role="alert">Dados Enviados com Sucesso!! -
                                                              ';
                                                            }else{
                                                              echo "<h3> Cadastro Não Realizado! </h3>";
                                                            }
                                                          } catch (PDOexception $e) {
                                                            echo "ERRO DE PDO:: {$e}";}
                                                      }
                                                      ?>
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
                                                                      $selectslide = 'SELECT * FROM tb_apresentacao ORDER BY id_apresentacao DESC LIMIT 3';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $mostrar ->id_apresentacao;?></th>
                                                                      <td><?php echo $mostrar ->titulo1_apr;?></td>
                                                                      <td><?php echo $mostrar ->subtitulo1_apr;?></td>
                                                                      <td class="icon-btn">
                                                                        <a href="home.php?acaoadmin=attsobre&idUp=<?php echo $mostrar ->id_apresentacao;?>" class="btn btn-success btn-icon" title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a>
                                                                        <a href="paginas/delete/delPaginas.php?idDelaprs=<?php echo $mostrar ->id_apresentacao;?>" class="btn btn-danger btn-icon" title="Deletar"><i class="fa fa-trash"></i></a>
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
