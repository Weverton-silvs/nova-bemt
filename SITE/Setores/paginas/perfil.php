
                                      <!--profile cover start-->
                                      <div class="row">
                                          <div class="col-lg-12">
                                            <div class="page-header-title">
                                              <div class="d-inline">
                                                  <h4 style="font-family:helvetica;">Meu Perfil</h4>
                                              </div>
                                            </div>
                                              <div class="cover-profile mt-4">
                                                  <div class="profile-bg-img">

                                                      <img class="profile-bg-img img-fluid" src="files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
                                                      <div class="card-block user-info">
                                                          <div class="col-md-12">
                                                              <div class="media-left">
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
                                                                  <a href="#" class="profile-image">
                                                                      <img class="user-img img-radius" src="imgAdmin/Perfil/<?php echo $mostrar ->img;?>" style="width:100px;" alt="user-img">
                                                                  </a>
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
                                                              </div>
                                                              <div class="media-body row">
                                                                  <div class="col-lg-12">
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
                                                                      <div class="user-title">
                                                                          <h2><?php echo $mostrar ->nome;?> <?php echo $mostrar ->sobrenome;?></h2>

                                                                      </div>
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
                                                                  </div>
                                                                  <div>
                                                                      <div class="pull-right cover-btn">
                                                                          <a href="home.php?acaoadmin=caduser" class="btn btn-primary"><i class="icofont icofont-plus"></i> Add User</a>

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
                                                                          <a href="home.php?acaoadmin=attperfil&idUp=<?php echo $mostrar->id_user1; ?>" class="btn btn-primary"><i class="icofont icofont-plus"></i> Edita Meu perfil</a>
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

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!--profile cover end-->
                                      <div class="row">
                                          <div class="col-lg-12">
                                              <!-- tab header start -->
                                              <div class="tab-header card">
                                                  <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                      <li class="nav-item">
                                                          <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Informações Pessoais</a>
                                                          <div class="slide"></div>
                                                      </li>
                                                      <li class="nav-item">
                                                          <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Usuarios Cadastrados</a>
                                                          <div class="slide"></div>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <!-- tab header end -->
                                              <!-- tab content start -->
                                              <div class="tab-content">
                                                  <!-- tab panel personal start -->
                                                  <div class="tab-pane active" id="personal" role="tabpanel">
                                                      <!-- personal card start -->
                                                      <div class="card">
                                                          <div class="card-header">
                                                              <h5 class="card-header-text">Sobre mim</h5>

                                                          </div>
                                                          <div class="card-block">
                                                              <div class="view-info">
                                                                  <div class="row">
                                                                      <div class="col-lg-12">
                                                                          <div class="general-info">
                                                                              <div class="row">
                                                                                  <div class="col-lg-12 col-xl-6">
                                                                                      <div class="table-responsive">
                                                                                          <table class="table m-0">
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
                                                                                                      <th scope="row">Nome Completo</th>
                                                                                                      <td><?php echo $mostrar->nome; ?> <?php echo $mostrar->sobrenome; ?></td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <th scope="row">Email</th>
                                                                                                      <td><?php echo $mostrar->email; ?></td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <th scope="row">Telefone</th>
                                                                                                      <td><?php echo $mostrar->numero; ?></td>
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
                                                                                  <!-- end of table col-lg-6 -->
                                                                                  <div class="col-lg-12 col-xl-6">
                                                                                      <div class="table-responsive">
                                                                                          <table class="table">
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
                                                                                                      <th scope="row">WhatsApp</th>
                                                                                                      <td><?php echo $mostrar->num_whats; ?></td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <th scope="row">WebSite</th>
                                                                                                      <td><?php echo $mostrar->site; ?></td>
                                                                                                  </tr>
                                                                                                  <tr>
                                                                                                      <th scope="row">Facebook</th>
                                                                                                      <td><?php echo $mostrar->facebook; ?></td>
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
                                                                                  <!-- end of table col-lg-6 -->
                                                                              </div>
                                                                              <!-- end of row -->
                                                                          </div>
                                                                          <!-- end of general info -->
                                                                      </div>
                                                                      <!-- end of col-lg-12 -->
                                                                  </div>
                                                                  <!-- end of row -->
                                                              </div>
                                                          </div>
                                                          <!-- end of card-block -->
                                                      </div>
                                                  </div>
                                                  <!-- tab pane personal end -->
                                                  <!-- tab pane contact start -->
                                                  <div class="tab-pane" id="contacts" role="tabpanel">
                                                      <div class="row">

                                                          <div class="col-lg-12">
                                                            <!-- Zero config.table start -->
                                                              <div class="card">
                                                                  <div class="card-header">
                                                                      <h5>Usuários</h5>

                                                                  </div>
                                                                  <div class="card-block">
                                                                      <div class="dt-responsive table-responsive">
                                                                          <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                                              <thead>
                                                                              <tr>
                                                                                  <th>Img</th>
                                                                                  <th>Nome</th>
                                                                                  <th>Email</th>
                                                                                  <th>Senha</th>
                                                                                  <th>Editar</th>
                                                                              </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php
                                                                                      //INICIO
                                                                                      $selectslide = 'SELECT * FROM tb_user1 ORDER BY id_user1 ';
                                                                                      $contador = 1;
                                                                                      try{
                                                                                        $resultado = $con -> prepare($selectslide);
                                                                                        $resultado -> execute();

                                                                                        $consulta = $resultado -> rowCount();
                                                                                        if ($consulta >0){
                                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                                      ?>
                                                                                  <tr>
                                                                                      <td><img src="imgAdmin/Perfil/<?php echo $mostrar ->img;?>" style="width: 100px
                                                          														;"alt=""></td>
                                                                                      <td><?php echo $mostrar ->nome;?></td>
                                                                                      <td><?php echo $mostrar ->email;?></td>
                                                                                      <td><?php echo $mostrar ->senha;?></td>
                                                                                      <td>
                                                                                        <?php
                                                                                        if ($mostrar->email==$_SESSION['email'] && $mostrar->senha==$_SESSION['senha']) {
                                                                                          $id = $mostrar->id_user1;
                                                                                          echo '<button  class="btn btn-success btn-icon"><a style="color:#fff" href="home.php?acaoadmin=attperfil&idUp='.$id.'"    title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a>';
                                                                                        }else {
                                                                                          $id = $mostrar->id_user1;
                                                                                          echo '<button  class="btn btn-success btn-icon"><a style="color:#fff" href="home.php?acaoadmin=attuser&idUp='.$id.'" title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a>';
                                                                                        }
                                                                                         ?>
                                                                                         <?php if($mostrar->email==$_SESSION['email'] && $mostrar->senha==$_SESSION['senha']){
                                                                                           echo '<button disabled class="btn btn-warning"><i class="fa fa-lock"></i></button>';
                                                                                         }
                                                                                         else{
                                                                                           $id = $mostrar->id_user1;
                                                                                           echo'<button class="btn btn-danger btn-icon"><a style="color:#fff" href="paginas/delete/delPaginas.php?idDelperfil='.$id.'"  title="Deletar"><i class="fa fa-trash"></i></a></button>';
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
                                                                              <tfoot>
                                                                              <tr>
                                                                                <th>Img</th>
                                                                                <th>Nome</th>
                                                                                <th>Email</th>
                                                                                <th>Senha</th>
                                                                                <th>Editar</th>
                                                                              </tr>
                                                                              </tfoot>
                                                                          </table>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <!-- Zero config.table end -->
                                                          </div>
                                                      </div>
                                                  </div>

                                              </div>
                                              <!-- tab content end -->
                                          </div>
                                      </div>
