
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Área de Cadastro</h4>
                                                  <?php
                                                  $id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
                                    //echo $id;
                                    $select = "SELECT * FROM tb_saida WHERE id_saida = :id ";
                                    try{
                                      $resultado = $con->prepare($select);
                                      $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                                      $resultado ->execute();
                                      $contar = $resultado->rowCount();
                                      if($contar > 0){
                                        while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                                          $id = $show->id_saida;
                                          $de = $show->de_saida;
                                          $setor = $show->setor_saida;
                                          $para = $show->para_saida;
                                          $setor2 = $show->setor2_saida;
                                          $horaS = $show->hora_saida;
                                          $horaS2 = $show->hora_saida2;
                                          $horaR = $show->hora_retorno;
                                          $horaE = $show->hora_entrada;



                                        }
                                      }else{
                                      echo '<div class="alert alert-danger"><strong>Aviso!</strong> Não há dados com ID :( </div>';
                                      }
                                    }catch(PDOException $e){
                                      echo "<b>Erro de PDO NO select: </b>".$e -> getMessage();
                                    }

                                    //atualizando Dados
                                    if(isset($_POST['btnatt'])){
                                    $de = $_POST['de'];
                                    $setor = $_POST['setor'];
                                    $para = $_POST['para'];
                                    $setor2 = $_POST['setor2'];
                                    $horaS = $_POST['horaS'];
                                    $horaS2 = $_POST['horaS2'];
                                    $horaR = $_POST['horaR'];
                                    $horaE = $_POST['horaE'];


                                    $update = "UPDATE tb_saida SET de_saida=:de,setor_saida=:setor, para_saida=:para, setor2_saida=:setor2, hora_saida=:horaS, hora_saida2=:horaS2, hora_retorno=:horaR, hora_entrada=:horaE WHERE id_saida =:id";
                                    try{
                                      $result = $con->prepare($update);
                                      $result ->bindValue(':id',$id,PDO::PARAM_INT);
                                      $result ->bindValue(':de',$de,PDO::PARAM_STR);
                                      $result ->bindValue(':setor',$setor,PDO::PARAM_STR);
                                      $result ->bindValue(':para',$para,PDO::PARAM_STR);
                                      $result ->bindValue(':setor2',$setor2,PDO::PARAM_STR);
                                      $result ->bindValue(':horaS',$horaS,PDO::PARAM_STR);
                                      $result ->bindValue(':horaS2',$horaS2,PDO::PARAM_STR);
                                      $result ->bindValue(':horaR',$horaR,PDO::PARAM_STR);
                                      $result ->bindValue(':horaE',$horaE,PDO::PARAM_STR);



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
                                                  <div class="row">                                                    
                                                  <div class="col-lg-6">
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">De</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="de" id="de"class="form-control" value="<?php echo $de;?>">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Para</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="para" id="para"class="form-control" value="<?php echo $para;?>">
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Setor</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="setor" id="setor" class="form-control" value="<?php echo $setor;?>">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Setor</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="setor2" id="setor2" class="form-control" value="<?php echo $setor2;?>">
                                                          </div>
                                                      </div>
                                                      </div>
                                                      </div>
                                                      <div class="row">
                                                      <div class="col-lg-4">
                                                        <h5 class="sub-title">Saída sem retorno</h5>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora Saída</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="horaS" id="horaS" class="form-control" value="<?php echo $horaS;?>">
                                                          </div>
                                                        </div>
                                                      </div>
                                                        <div class="col-lg-4">
                                                        <h5 class="sub-title">Saída com retorno</h5>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora Saída</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="horaS2" id="horaS2" class="form-control" value="<?php echo $horaS2;?>">
                                                          </div>
                                                        </div>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora Retorno</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="horaR" id="horaR" class="form-control" value="<?php echo $horaR;?>">
                                                          </div>
                                                        </div>
                                                      </div>
                                                        <div class="col-lg-4">
                                                        <h5 class="sub-title">Entrada com atraso</h5>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora entrada</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="horaE" id="horaE" class="form-control" value="<?php echo $horaE;?>">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      </div>
                                                      <button style="float:right;" name="btnatt" type="submit" class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
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
                                                                      <th>De</th>
                                                                      <th>Para</th>
                                                                      <th>Tipo</th>
                                                                      <th>Horário</th>
                                                                      <th>Edição</th>

                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_saida ORDER BY id_saida DESC LIMIT 1';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <td><?php echo $mostrar->de_saida.' - '.$mostrar->setor_saida;?></td>
                                                                      <td><?php echo $mostrar->para_saida.' - '.$mostrar->setor2_saida;?></td>
                                                                      <td><?php
                                                                      $hrSaida = $mostrar->hora_saida;
                                                                      $hrSaida2 = $mostrar->hora_saida2;
                                                                      $hrRetorno = $mostrar->hora_retorno;
                                                                      $hrEntrada = $mostrar->hora_entrada;
                                                                        if (empty($hrSaida2) && empty($hrRetorno) && empty($hrEntrada)) {
                                                                          echo 'Saída sem retorno';
                                                                        }elseif (empty($hrSaida) && empty($hrEntrada)) {
                                                                          echo 'Saída com retorno';
                                                                        }elseif (empty($hrSaida) && empty($hrSaida2) && empty($hrRetorno)) {
                                                                          echo 'Entrada com atraso';
                                                                        }

                                                                          ?></td>
                                                                      <td><?php 
                                                                            $hrSaida = $mostrar->hora_saida;
                                                                            $hrSaida2 = $mostrar->hora_saida2;
                                                                            $hrRetorno = $mostrar->hora_retorno;
                                                                            $hrEntrada = $mostrar->hora_entrada;
                                                                        if (empty($hrSaida2) && empty($hrRetorno) && empty($hrEntrada)) {
                                                                          echo 'Saída: '.$mostrar->hora_saida;
                                                                        }elseif (empty($hrSaida) && empty($hrEntrada)) {
                                                                          echo 'Entrada: '.$mostrar->hora_saida2.'<br>Retorno: '.$mostrar->hora_retorno;
                                                                        }elseif (empty($hrSaida) && empty($hrSaida2) && empty($hrRetorno)) {
                                                                          echo 'Entrada: '.$mostrar->hora_entrada;
                                                                        }
                                                                          ?></td>

                                                                      <td class="icon-btn">
                                                                        <a href="home.php?acaoadmin=reqIO"class="btn btn-info btn-icon" title="Voltar"><i style="margin-top: 8px;"class="fa fa-reply"style="text-align:center"></i></a>
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
