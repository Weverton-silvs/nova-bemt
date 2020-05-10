
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Área de Cadastro</h4>
                                                  <?php
                                									$id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );

                                    $select = "SELECT * FROM tb_user1 Where id_user1 = :id ";
                                    try{
                                      $resultado = $con->prepare($select);
                                      $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                                      $resultado ->execute();
                                      $contar = $resultado->rowCount();
                                      if($contar > 0){
                                        while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                                          $id = $show->id_user1;
                                          $img = $show->img;
                                          $nome = $show->nome;
                                          $sobrenome = $show->matricula;
                                          $email = $show->email;
                                          $senha = $show->senha;
                                          $emp = $show->empresa;
                                          


                                        }
                                      }else{
                                      echo '<div class="alert alert-danger"><strong>Aviso!</strong> Não há dados com ID :( </div>';
                                      }
                                    }catch(PDOException $e){
                                      echo "<b>Erro de PDO NO select: </b>".$e -> getMessage();
                                    }
                                    //Atualizando dados
                                    $novoNome = $img;
                                      if (isset($_POST['Atualizar'])) {
                                        $img = filter_input(INPUT_POST, 'arquivo',FILTER_DEFAULT);
                                        $nome = filter_input(INPUT_POST, 'nome',FILTER_DEFAULT);
                                        $sobrenome = filter_input(INPUT_POST, 'matricula',FILTER_DEFAULT);
                                        $email = filter_input(INPUT_POST, 'email',FILTER_DEFAULT);
                                        $senha = filter_input(INPUT_POST, 'senha',FILTER_DEFAULT);
                                        $emp = filter_input(INPUT_POST, 'empresa',FILTER_DEFAULT);
                                        


                                //INFO IMAGEM
                                             if (!empty($_FILES['arquivo']['name'])) {
                                            $file     = $_FILES['arquivo'];
                                            $numFile  = count(array_filter($file['name']));

                                            //PASTA
                                            $folder   = 'imgAdmin/Perfil';

                                            //REQUISITOS
                                            $permite  = array('image/jpeg', 'image/png', 'image/jpg', 'image/gif');
                                            $maxSize  = 1024 * 1024 * 5;

                                            //MENSAGENS
                                            $msg    = array();
                                            $errorMsg = array(
                                              1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
                                              2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
                                              3 => 'o upload do arquivo foi feito parcialmente',
                                              4 => 'Não foi feito o upload do arquivo'
                                            );

                                            if($numFile <= 0){
                                              // echo '<div class="alert alert-danger">
                                              //       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                              //       Selecione uma fotos para o contato!
                                              //     </div>';
                                            }
                                            else if($numFile >=2){
                                              echo '<div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Seu limite e de uma foto apenas.
                                                  </div>';
                                            }else{
                                              for($i = 0; $i < $numFile; $i++){
                                                $name   = $file['name'][$i];
                                                $type = $file['type'][$i];
                                                $size = $file['size'][$i];
                                                $error  = $file['error'][$i];
                                                $tmp  = $file['tmp_name'][$i];

                                                $extensao = @end(explode('.', $name));
                                                $novoNome = rand().".$extensao";

                                                if($error != 0)
                                                  $msg[] = "<b>$name :</b> ".$errorMsg[$error];
                                                else if(!in_array($type, $permite))
                                                  $msg[] = "<b>$name :</b> Erro imagem não suportada!";
                                                else if($size > $maxSize)
                                                  $msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 2MB";
                                                else{

                                                  if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){

                                                  }else
                                                    $msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro dados não enviados...";

                                                }

                                                foreach($msg as $pop)
                                                echo '';
                                              }
                                            }

                                          }else{
                                            $novoNome = $img;
                                          }
                                                //QUERY DE UPDATE
                                        $update = "UPDATE tb_user1 SET img=:foto,nome=:nome,matricula=:snome,email=:email,senha=:senha,empresa=:empresa
                                        WHERE id_user1 =:id";
                                        try{
                                          $result = $con->prepare($update);
                                          $result ->bindValue(':id',$id,PDO::PARAM_INT);
                                          $result ->bindValue(':foto',$novoNome,PDO::PARAM_STR);
                                          $result ->bindValue(':nome',$nome,PDO::PARAM_STR);
                                          $result ->bindValue(':snome',$sobrenome,PDO::PARAM_STR);
                                          $result ->bindValue(':email',$email,PDO::PARAM_STR);
                                          $result ->bindValue(':senha',$senha,PDO::PARAM_STR);
                                          $result ->bindValue(':empresa',$emp,PDO::PARAM_STR);
                                          



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
                                                              <label class="col-sm-2 col-form-label">Arquivo</label>
                                                              <div class="col-sm-8">
                                                                  <input type="file" name="arquivo[]" id="nome" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                              <label class="col-sm-2 control-label" for="arquivo"><img src="imgAdmin/Perfil/<?php echo $novoNome;?>" style="width:100%;" alt=""></label>
                                                          </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Nome</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" name="nome" value="<?php echo $nome;?>" id="nome" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Matícula</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" name="matricula"  value="<?php echo $sobrenome;?>"id="nome" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Email</label>
                                                              <div class="col-sm-10">
                                                                  <input type="email" name="email" value="<?php echo $email;?>" id="email" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Senha</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" name="senha" value="<?php echo $senha;?>" id="senha" class="form-control" placeholder="Digite aqui...">
                                                              </div>
                                                          </div>
                                                          <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Empresa</label>
                                                            <div class="col-sm-10">
                                                                <select name="empresa" class="form-control">
                                                                    <option selected="selected"><?php echo $emp;?></option>
                                                                    <option ><?php echo $emp;?></option>
                                                                </select>
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
                                                                      <th>Imagem</th>
                                                                      <th>Nome</th>
                                                                      <th>Email</th>
                                                                      <th>Senha</th>
                                                                      <th>Edição</th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_user1 WHERE email=:email AND senha=:senha';
                                                                      $login = $_SESSION['email'];
                                                                      $senha = $_SESSION['senha'];
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado->bindParam(':email',$login,PDO::PARAM_STR);
                                                                        $resultado->bindParam(':senha',$senha,PDO::PARAM_STR);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $mostrar ->id_user1;?></th>
                                                                      <th> <img src="imgAdmin/Perfil/<?php echo $mostrar ->img;?>" style="width: 100px
                                          														;"alt=""> </th>
                                                                      <td><?php echo $mostrar ->nome;?></td>
                                                                      <td><?php echo $mostrar ->email;?></td>
                                                                      <td><?php echo $mostrar ->senha;?></td>
                                                                      <td class="icon-btn">
                                                                       <button class="btn btn-info btn-icon"> <a style="color:#fff" href="home.php?acaoadmin=perfil" title="Voltar"><i class="fa fa-reply"style="text-align:center"></i></a></button>
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
