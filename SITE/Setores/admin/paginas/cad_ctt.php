
                                        <div class="row">

                                            <div class="col-lg-12">
                                              <div class="card">
                                                <div class="card-block">
                                                    <h4 class="sub-title">Área de Cadastro</h4>
                                                    <form method="post" action="" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Cidade</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="Cidade" id="Cidade" class="form-control" placeholder="Digite aqui...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Telefone</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="Telefone" id="Telefone" class="form-control" placeholder="Digite aqui...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="text"  name="email" id="email" class="form-control" placeholder="Digite aqui...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Site</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="Site" id="Site" class="form-control" placeholder="Digite aqui...">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Embad do Mapa</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="embad" id="embad" class="form-control" placeholder="Digite aqui...">
                                                            </div>
                                                        </div>
                                                        <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
                                                  </form>

                                              </div>
                                              <?php
                                                            if(isset($_POST['cadBtn'])){
                                                            $cidade = $_POST['Cidade'];
                                                            $tel = $_POST['Telefone'];
                                                            $email = $_POST['email'];
                                                            $site = $_POST['Site'];
                                                            $embad = $_POST['embad'];




                                                            $insert = "INSERT INTO tb_local (cidade,telefone,emaill,site,embad) VALUES (:Cidade,:Telefone,:email,:Site,:embad)";
                                                            try {
                                                              $result = $con->prepare($insert);
                                                              $result ->bindParam(':Cidade',$cidade,PDO::PARAM_STR);
                                                              $result ->bindParam(':Telefone',$tel,PDO::PARAM_STR);
                                                              $result ->bindParam(':email',$email,PDO::PARAM_STR);
                                                              $result ->bindParam(':Site',$site,PDO::PARAM_STR);
                                                              $result ->bindParam(':embad',$embad,PDO::PARAM_STR);


                                                              $result->execute();

                                                              $contar = $result->rowCount();
                                                              if($contar>0){
                                                                echo '<div class="alert alert-success" role="alert">Dados Enviados com Sucesso!! -
                                                                ';
                                                              }else{
                                                                echo "<h3> Cadastro Não Realizado</h3>";
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
                                                                    <th>Cidade</th>
                                                                    <th>Telefone</th>
                                                                    <th>E-mail</th>
                                                                    <th>Site</th>
                                                                    <th>Embad</th>
                                                                    <th>Editar</th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_local ORDER BY id_local DESC LIMIT 3';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                    <td><?php echo $mostrar ->id_local;?></td>
                                                                    <td><?php echo $mostrar ->cidade;?></td>
                                                                    <td><?php echo $mostrar ->telefone;?></td>
                                                                    <td><?php echo $mostrar ->emaill;?></td>
                                                                    <td><?php echo $mostrar ->site;?></td>
                                                                    <td><?php echo $mostrar ->embad;?></td>
                                                                    <td class=" icon-btn">
                                                                      <button class="btn btn-success btn-icon" ><a style="color:#fff" href="home.php?acaoadmin=attlocal&idUp=<?php echo $mostrar ->id_local;?>"><i class="fa fa-edit"></i></a></button>
                                                                     <button class="btn btn-danger btn-icon"> <a style="color:#fff" href="paginas/deletes/delLocal.php?idDel=<?php echo $mostrar ->id_local;?>"  ><i class="fa fa-trash-o"></i></a></button>
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
