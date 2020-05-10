
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Área de Cadastro</h4>
                                                  <form method="post" action="" enctype="multipart/form-data">

                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Título</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" name="titulo" id="titulo"class="form-control" placeholder="Digite aqui...">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Arquivo</label>
                                                          <div class="col-sm-10">
                                                              <input type="file"name="arquivo[]" id="arquivo" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Descrição</label>
                                                          <div class="col-sm-10">
                                                              <textarea rows="5" cols="5" name="desc" id="desc"class="form-control" placeholder="Digite aqui..."></textarea>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label class="col-sm-2 col-form-label">Observação</label>
                                                          <div class="col-sm-10">
                                                              <textarea rows="5" cols="5" name="obs" id="obs" class="form-control" placeholder="Digite aqui..."></textarea>
                                                          </div>
                                                      </div>
                                                      <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>

                                                    </form>

                                            </div>
                                            <?php
                                                        if(isset($_POST['cadBtn'])){

                                                        $titulo = trim(strip_tags($_POST['titulo']));
                                                        $desc = trim(strip_tags($_POST['desc']));
                                                        $obs = trim(strip_tags($_POST['obs']));


                                                        $avatar = $_FILES['arquivo'];
                                                        $numfile = count(array_filter($avatar['name']));

                                                        $folder = 'imgAdmin/Adm';
                                                        $permite = array('image/jpeg','image/png','image/jpg','image/gif');
                                                        $maxSize = 1024*1024*2;

                                                        $msg = array();
                                                        $errorMsg = array(
                                                          1 =>'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini',
                                                          2 =>'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulario HTML',
                                                          3 =>'O upload do arquivo foi feito parcialmente',
                                                          4 =>'Não foi feito o upload do arquivo'
                                                        );
                                                        if($numfile <= 0){
                                                          echo '<div class="alert alert-danger">
                                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                                          Selecione uma foto para avatar do usário </div>';
                                                        }
                                                        if($numfile >= 2){
                                                          echo '<div class="alert alert-danger">
                                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                                          Seu limite e de uma foto de avatar apenas </div>';
                                                        }
                                                        else{
                                                          for($i =0; $i<$numfile; $i++){
                                                            $name = $avatar['name'][$i];
                                                            $type = $avatar['type'][$i];
                                                            $size = $avatar['size'][$i];
                                                            $error = $avatar['error'][$i];
                                                            $tmp = $avatar['tmp_name'][$i];

                                                            $extensao = @end(explode('.',$name));
                                                            $novoNome = rand().".$extensao";

                                                            if($error != 0)
                                                              $msg[] = "<b>$name :</b> ".$errorMsg[$error];

                                                            elseif(!in_array($type,$permite))
                                                              $msg[] = "<b>$name :</b> Erro imagem não suportada!";
                                                              elseif($size> $maxSize)
                                                              $msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 2MB";
                                                              else{
                                                                if (move_uploaded_file($tmp,$folder.'/'.$novoNome)) {

                                                                  $cadUser = "INSERT INTO tb_adm (img,titulo,descricao,observacao) VALUES (:avatar,:titulo,:descricao,:obs)";
                                                                  try {
                                                                   $result = $con->prepare($cadUser);
                                                                   $result ->bindParam(':avatar',$novoNome,PDO::PARAM_STR);
                                                                 $result ->bindParam(':titulo',$titulo,PDO::PARAM_STR);
                                                                 $result ->bindParam(':descricao',$desc,PDO::PARAM_STR);
                                                                 $result ->bindParam(':obs',$obs,PDO::PARAM_STR);

                                                                 $result->execute();

                                                                 $contar = $result->rowCount();
                                                                 if($contar>0){
                                                                   echo '<div class="alert alert-success" role="alert">Dados Enviados com Sucesso!! </div>';
                                                                 }else{
                                                                   echo '<div class="alert alert-danger" role="alert">Dados Enviados com Sucesso!! </div>';
                                                                 }
                                                           } catch (PDOexception $e) {
                                                                   echo "ERRO DE PDO:: {$e}";}
                                                                }else
                                                                $msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro dados não enviados ...";
                                                                }
                                                                foreach($msg as $pop)
                                                                echo '';
                                                              }



                                                          }
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
                                                                      <th>Imagem</th>
                                                                      <th>Título</th>
                                                                      <th>Descrição</th>
                                                                      <th>Observação</th>
                                                                      <th>Edição</th>

                                                                  </tr>
                                                              </thead>
                                                              <tbody>

                                                                <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_adm ORDER BY id_adm DESC LIMIT 3';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $mostrar ->id_adm;?></th>
                                                                      <td><img src="imgAdmin/Adm/<?php echo $mostrar ->img;?>" style="width: 100px
                                          														;"alt=""></td>
                                                                      <td><?php echo $mostrar ->titulo;?></td>
                                                                      <td><?php echo $mostrar ->descricao;?></td>
                                                                      <td><?php echo $mostrar ->observacao;?></td>
                                                                      <td class="icon-btn">
                                                                        <a href="home.php?acaoadmin=attadm&idUp=<?php echo $mostrar ->id_adm;?>" class="btn btn-success btn-icon" title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a>
                                                                        <a href="paginas/delete/delPaginas.php?idDeladm=<?php echo $mostrar ->id_adm;?>" class="btn btn-danger btn-icon" title="Deletar"><i class="fa fa-trash"></i></a>
                                                                        <a  class="btn btn-warning btn-icon waves-effect md-trigger" data-modal="modal-1"><i class="fa fa-eye"></i></a>

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
