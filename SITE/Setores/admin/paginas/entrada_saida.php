
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Autorização para Entrada e Saída antecipada</h4>
                                                  <form method="post" action="" enctype="multipart/form-data">
                                                  <div class="row">                                                    
                                                  <div class="col-lg-6">
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">De</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="de" id="de"class="form-control" placeholder="Digite aqui...">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Para</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="para" id="para"class="form-control" placeholder="Digite aqui...">
                                                          </div>
                                                      </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Setor</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="setor" id="setor" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Setor</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="setor2" id="setor2" class="form-control">
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
                                                              <input type="text" name="hora_saida" id="hora_saida" class="form-control">
                                                          </div>
                                                        </div>
                                                      </div>
                                                        <div class="col-lg-4">
                                                        <h5 class="sub-title">Saída com retorno</h5>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora Saída</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="hora_saida2" id="hora_saida2" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora Retorno</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="hora_retorno" id="hora_retorno" class="form-control">
                                                          </div>
                                                        </div>
                                                      </div>
                                                        <div class="col-lg-4">
                                                        <h5 class="sub-title">Entrada com atraso</h5>
                                                        <div class="form-group row">
                                                          <label class="col-sm-4 col-form-label">Hora entrada</label>
                                                          <div class="col-sm-6">
                                                              <input type="text" name="hora_entrada" id="hora_entrada" class="form-control">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      </div>
                                                      <button style="float:right;" name="cadBtn" type="submit" class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
                                                    </form>  
                                            </div>
                                                    <?php
                                                          if(isset($_POST['cadBtn'])){
                                                          $de = $_POST['de'];
                                                          $setor = $_POST['setor'];
                                                          $para = $_POST['para'];
                                                          $setor2 = $_POST['setor2'];
                                                          $hrSaida = $_POST['hora_saida'];
                                                          $hrSaida2 = $_POST['hora_saida2'];
                                                          $hrRetorno = $_POST['hora_retorno'];
                                                          $hrEntrada = $_POST['hora_entrada'];

                                                          $insert = "INSERT INTO tb_saida (de_saida, setor_saida, para_saida, setor2_saida, hora_saida, hora_saida2, hora_retorno, hora_entrada) VALUES (:de,:setor, :para, :setor2, :horaS, :horaS2, :horaR, :horaE)";
                                                          try {
                                                            $result = $con->prepare($insert);
                                                            $result ->bindParam(':de',$de,PDO::PARAM_STR);
                                                            $result ->bindParam(':setor',$setor,PDO::PARAM_STR);
                                                            $result ->bindParam(':para',$para,PDO::PARAM_STR);
                                                            $result ->bindParam(':setor2',$setor2,PDO::PARAM_STR);
                                                            $result ->bindParam(':horaS',$hrSaida,PDO::PARAM_STR);
                                                            $result ->bindParam(':horaS2',$hrSaida2,PDO::PARAM_STR);
                                                            $result ->bindParam(':horaR',$hrRetorno,PDO::PARAM_STR);
                                                            $result ->bindParam(':horaE',$hrEntrada,PDO::PARAM_STR);

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
                                                                      $select = 'SELECT * FROM tb_saida ORDER BY id_saida DESC LIMIT 3';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($select);
                                                                        $resultado-> execute();

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
                                    <a class="btn btn-success btn-icon" style="color:#fff" href="home.php?acaoadmin=attreqIO&idUp=<?php echo $mostrar->id_saida;?>"  title="Editar"><i class="fa fa-pencil-square-o" style="text-align:center; margin-top: 8px"></i></a>  
                                                                       <a class="btn btn-danger btn-icon" style="color:#fff" href="paginas/delete/delPaginas.php?idDelsaida=<?php echo $mostrar ->id_saida;?>"  title="Deletar"><i class="fa fa-trash" style=" margin-top: 8px"></i></a>                                                                        

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
