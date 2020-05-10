
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-blue">
                                                    <div class="card-block">
                                                        <i class="feather icon-user bg-simple-c-blue card1-icon"></i>
                                                        
                                                        <h4>
                                                        <?php
                                                                  
                                                                        $resultado = $con -> prepare("SELECT * FROM tb_user1");
                                                                        $resultado -> execute();

                                                                        echo $resultado -> rowCount();
                                                                        
                                                                          ?>
                                                    </h4>
                                                        
                                                        <p>Usuários</p>
                                                        <a href="home.php?acaoadmin=caduser" class="more-info">Add User</a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-pink">
                                                    <div class="card-block">
                                                        <i class="feather icon-home bg-simple-c-pink card1-icon"></i>
                                                        <h4><?php
                                                                      //INICIO
                                                                      
                                                                      
                                                                      
                                                                        $resultado = $con -> prepare("SELECT * FROM tb_user1");
                                                                        $resultado -> execute();

                                                                        echo $resultado -> rowCount();
                                                                        
                                                                          ?></h4>
                                                        <p>Setores</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-green">
                                                    <div class="card-block">
                                                        <i class="feather icon-alert-triangle bg-simple-c-green card1-icon"></i>
                                                        <h4>652</h4>
                                                        <p>Linx</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card user-widget-card bg-c-yellow">
                                                    <div class="card-block">
                                                        <i class="feather icon-twitter bg-simple-c-yellow card1-icon"></i>
                                                        <h4><?php
                                                                      //INICIO
                                                                      
                                                                      
                                                                      
                                                                        $resultado = $con -> prepare("SELECT * FROM tb_comentario");
                                                                        $resultado -> execute();

                                                                        echo $resultado -> rowCount();
                                                                        
                                                                          ?></h4>
                                                        <p>Comentários</p>
                                                        <a href="home.php?acaoadmin=cadcoment" class="more-info">Visualizar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->

                                            <div class="col-lg-12">
                                              <!-- Basic table card start -->
                                              <div class="card">
                                                  <div class="card-header">
                                                    <h5>Usuários Cadastrados</h5>
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
                                                                      $selectslide = 'SELECT * FROM tb_user1 ORDER BY id_user1 DESC LIMIT 3' ;
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                  <tr>
                                                                      <th scope="row"><?php echo $mostrar ->id_user1;?></th>
                                                                      <th> <img src="imgAdmin/Perfil/<?php echo $mostrar ->img;?>" style="width: 100px;"alt=""> </th>
                                                                      <td><?php echo $mostrar ->nome;?></td>
                                                                      <td><?php echo $mostrar ->email;?></td>
                                                                      <td><?php echo $mostrar ->senha;?></td>
                                                                      <td class="icon-btn">
                                                                        <?php
                                                                        if ($mostrar->email==$_SESSION['email'] && $mostrar->senha==$_SESSION['senha']) {
                                                                          $id = $mostrar->id_user1;
                                                                          echo '<button class="btn btn-success btn-icon"><a  style="color:#fff" href="home.php?acaoadmin=attperfil&idUp='.$id.'"  title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a></button>';
                                                                        }else {
                                                                          $id = $mostrar->id_user1;
                                                                          echo '<button class="btn btn-success btn-icon"><a style="color:#fff" href="home.php?acaoadmin=attuser&idUp='.$id.'"  title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a></button>';
                                                                        }
                                                                         ?>
                                                                          <?php if($mostrar->email==$_SESSION['email'] && $mostrar->senha==$_SESSION['senha']){
                                                                            echo '<button disabled class="btn btn-warning"><i class="fa fa-lock"></i></button>';
                                                                          }
                                                                          else{
                                                                            $id = $mostrar->id_user1;
                                                                            echo'<button class="btn btn-danger btn-icon"><a style="color:#fff" href="paginas/delete/delPaginas.php?idDelhome='.$id.'"  title="Deletar"><i class="fa fa-trash"></i></a></button>';
                                                                          }
                                                                          ?>
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
                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Basic table card end -->
                                            </div>

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


                                                      </div>
                                                  </div>
                                              </div>
                                              <!-- Basic table card end -->
                                            </div>

                                            

                                            

                                        </div>
