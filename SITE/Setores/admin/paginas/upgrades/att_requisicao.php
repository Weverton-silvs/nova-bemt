
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Atualizar Requisição</h4>
<?php
                                                  $id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
                                    //echo $id;
                                    $select = "SELECT * FROM requisicao WHERE id_requisicao = :id ";
                                    try{
                                      $resultado = $con->prepare($select);
                                      $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                                      $resultado ->execute();
                                      $contar = $resultado->rowCount();
                                      if($contar > 0){
                                        while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                                          $id = $show->id_requisicao;
                                          $data = $show->data;
                                          $setor = $show->setor;
                                          $referencia = $show->referencia;
                                          $op = $show->op;
                                          $grupo = $show->grupo;
                                          $solicitante = $show->solicitante;
                                          $motivo = $show->motivo;
                                          $codigo = $show->codigo;
                                          $descricao = $show->descricao;
                                          $quantidade = $show->quantidade;

                                        }
                                      }else{
                                      echo '<div class="alert alert-danger"><strong>Aviso!</strong> Não há dados com ID :( </div>';
                                      }
                                    }catch(PDOException $e){
                                      echo "<b>Erro de PDO NO select: </b>".$e -> getMessage();
                                    }

                                    //atualizando Dados
                                    if(isset($_POST['Atualizar'])){
                                    $data = $_POST['data'];
                                                        $setor = $_POST['setor'];
                                                        $referencia = $_POST['referencia'];
                                                        $op = $_POST['op'];
                                                        $grupo = $_POST['grupo'];
                                                        $solicitante = $_POST['solicitante'];
                                                        $motivo = $_POST['motivo'];
                                                        $codigo = $_POST['codigo'];
                                                        $descricao = $_POST['descricao'];
                                                        $quantidade = $_POST['quantidade'];
                                    


                                    $update = "UPDATE requisicao SET 
                                   data =:data, setor=:setor,referencia=:referencia, op=:op, grupo=:grupo, solicitante=:solicitante, motivo=:motivo,codigo=:codigo,descricao=:descricao,quantidade=:quantidade WHERE id_requisicao =:id";
                                    try{
                                      $result = $con->prepare($update);
                                      $result ->bindValue(':id',$id,PDO::PARAM_INT);
                                      $result ->bindValue(':data',$data,PDO::PARAM_STR);
                                      $result ->bindValue(':setor',$setor,PDO::PARAM_STR);
                                      $result ->bindValue(':referencia',$referencia,PDO::PARAM_STR);
                                      $result ->bindValue(':op',$op,PDO::PARAM_STR);
                                      $result ->bindValue(':grupo',$grupo,PDO::PARAM_STR);
                                      $result ->bindValue(':solicitante',$solicitante,PDO::PARAM_STR);
                                      $result ->bindValue(':motivo',$motivo,PDO::PARAM_STR);
                                      $result ->bindValue(':codigo',$codigo,PDO::PARAM_STR);
                                      $result ->bindValue(':descricao',$descricao,PDO::PARAM_STR);
                                      $result ->bindValue(':quantidade',$quantidade,PDO::PARAM_STR);


                                      

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
                                                          <label class="col-sm-2 col-form-label">Data</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="data" value="<?php echo $data;?>" id="data"class="form-control" placeholder="Digite aqui...">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Setor</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="setor" value="<?php echo $setor;?>" id="setor" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Referência</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="referencia" value="<?php echo $referencia;?>" id="referencia" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Ordem de Produção</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="op" value="<?php echo $op;?>" id="op" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Grupo</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="grupo" value="<?php echo $grupo;?>" id="grupo" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Solicitante</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="solicitante" id="solicitante" class="form-control" value="<?php echo $solicitante;?>">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Motivo</label>
                                                          <div class="col-sm-10">
                                                              <textarea rows="5" cols="5" name="motivo" id="motivo"class="form-control" value="<?php echo $motivo;?>" placeholder="Digite aqui..."></textarea>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Código do item</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="codigo" value="<?php echo $codigo;?>" id="codigo" class="form-control">
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Descrição do item</label>
                                                          <div class="col-sm-10">
                                                              <textarea rows="5" cols="5" name="descricao" id="descricao" class="form-control" placeholder="Digite aqui..."><?php echo $descricao;?></textarea>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Quantidade do item</label>
                                                          <div class="col-sm-10">
                                                              <input type="text"name="quantidade" id="quantidade" class="form-control" value="<?php echo $quantidade;?>">
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
                                                                      <th>Data</th>
                                                                      <th>Setor</th>
                                                                      <th>Referência</th>
                                                                      <th>OP</th>
                                                                      <th>Grupo</th>
                                                                      <th>Solicitante</th>
                                                                      <th>Motivo</th>
                                                                      <th>Código</th>
                                                                      <th>Descrição</th>
                                                                      <th>Quantidade</th>
                                                                      <th>Edição</th>

                                                                  </tr>
                                                              </thead>
                                                              <tbody>

                                                                <?php
                                                                      //INICIO
                                                                      $select = 'SELECT * FROM requisicao ORDER BY id_requisicao DESC LIMIT 1';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($select);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $mostrar ->id_requisicao;?></th>
                                                                      <td><?php echo $mostrar ->data;?></td>
                                                                      <td><?php echo $mostrar ->setor;?></td>
                                                                      <td><?php echo $mostrar ->referencia;?></td>
                                                                      <td><?php echo $mostrar ->op;?></td>
                                                                      <td><?php echo $mostrar ->grupo;?></td>
                                                                      <td><?php echo $mostrar ->solicitante;?></td>
                                                                      <td><?php echo $mostrar ->motivo;?></td>
                                                                      <td><?php echo $mostrar ->codigo;?></td>
                                                                      <td><?php echo $mostrar ->descricao;?></td>
                                                                      <td><?php echo $mostrar ->quantidade;?></td>

                                                                      <td class="icon-btn">
                                                                        <button class="btn btn-info btn-icon" ><a style="color: #fff;"href="home.php?acaoadmin=requisicao" title="Voltar"><i class="fa fa-reply"style="text-align:center"></i></a></button>
                                                                        
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
                                                                          <li><strong>Titulo:</strong> lehfeufhlvbjelv</li>
                                                                          <li><strong>Imagem:</strong> <br> <img src="img/01.jpg" alt="" style="width:300px;"> </li>
                                                                          <li><strong>Descrição:</strong> descricao</li>
                                                                          <li><strong>Observação:</strong> observacao</li>
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
