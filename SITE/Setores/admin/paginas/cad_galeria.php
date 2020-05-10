
                                        <div class="row">


<div class="col-lg-12">
  <div class="card">
    <div class="card-block">
        <h4 class="sub-title">Área de Cadastro</h4>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Arquivo</label>
                <div class="col-sm-10">
                    <input type="file" name="arquivo[]" id="arquivo" class="form-control" multiple>
                </div>
            </div>
            <div class="checkbox-fade fade-in-bemt cr">
                <label>
                    <input type="checkbox" name="check1" value="1">
                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                    </span>
                    <span>Exibir</span>
                </label>
            </div>

            <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
          </form>

  </div>
  <?php
              if(isset($_POST['cadBtn'])){
              $nivel = isset($_POST["check1"]) ? $_POST["check1"] : '0';
              $avatar = $_FILES['arquivo'];
              $numfile = count(array_filter($avatar['name']));

              $folder = 'imgAdmin/Galeria';
              $permite = array('image/jpeg','image/png','image/jpg','image/gif');
              $maxSize = 1024*1024*5;

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

                        $cadUser = "INSERT INTO tb_galeria (img,nivel) VALUES (:avatar,:nivel)";
                        try {
                         $result = $con->prepare($cadUser);
                         $result ->bindParam(':avatar',$novoNome,PDO::PARAM_STR);
                         $result ->bindParam(':nivel',$nivel,PDO::PARAM_STR);


                       $result->execute();

                       $contar = $result->rowCount();
                      
                 } catch (PDOexception $e) {
                         echo "ERRO DE PDO:: {$e}";}
                      }else
                      $msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro dados não enviados ...";
                      }
                      foreach($msg as $pop)
                      echo '';
                    }

                    if($contar>0){
                      echo '<div class="alert alert-success" role="alert">Dados Enviados com Sucesso!! </div>';
                    }else{
                      echo '<div class="alert alert-danger" role="alert">Dados Enviados com Sucesso!! </div>';
                    }

                }
              }
              
               ?>
               
</div>
</div>







<div class="col-sm-12">
                                                <!-- Swiper slider card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Swiper Slider</h5>

                                                    </div>
                                                    <div class="">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper">

                                                            
                                                      <?php
                                                                      //INICIO
                                                                      $selectslide = 'SELECT * FROM tb_galeria ORDER BY id ASC';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($selectslide);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                <div class="swiper-slide">
                                                           

                                                                

                                                                    <img class="img-fluid width-100" style="width: 400px; height: 200px;" src="imgAdmin/Galeria/<?php echo $mostrar-> img;?>" alt="Card image cap">
                                                                    <!-- end of card-block -->
                                                                    <!-- end of card -->
                                                                    <form method="post">
                                                                    <div class="checkbox-fade fade-in-bemt cr">
                                                                      
                <label>
                    <input type="checkbox" name="check1" <?= $mostrar -> nivel == '1' ? 'checked' : '' ?> value="1">
                    <span class="cr">
                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                    </span>
                    <span>Exibir</span>
                </label>

            </div>
            <input type="hidden" value="<?php echo $mostrar -> id; ?>" name="id">
            <button type="submit" name="env">att</button>
            </form>
           
                            
                                                       

                                                                    
                                                                    
                                                     
                                                                    

                                                                </div>
                                                                <!-- end of swiper-slide -->
                                                                
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
                                                            <!-- end of swipper-wrapper -->
                                                            
                                                            <?php
                                                            if(isset($_POST['env'])){
                                                              $nivel = isset($_POST["check1"]) ? $_POST["check1"] : '0';
                                                              $id = $_POST["id"];
                                                              $update = "UPDATE tb_galeria SET nivel=:nivel WHERE id=:id";
                                                              $result = $con -> prepare($update);
                                                              $result ->bindParam(':id',$id,PDO::PARAM_STR);
                                                              $result ->bindParam(':nivel',$nivel,PDO::PARAM_STR);
                                                              $result ->execute();
                                                              header("Location: home.php?acaoadmin=galeria");

                                                            }
                                                            
                                                            ?>
                                                            
                                                        </div>
                                                        <!-- ADD AROWS-->
                                                        <!--<div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev"></div>-->
                                                    </div>
                                                </div>
                                                <!-- Swiper slider card end -->
                                            </div>
                                            <!--<script>
                                            var swiper = new Swiper('.swiper-container',{
                                                loop:true,
                                                pagination:{
                                                    el: '.swiper-pagination',
                                                    clickable: true,
                                                },
                                                navigation:{
                                                    nextE1: '.swiper-button-next',
                                                    prevE1: '.swiper-button-prev',
                                                },
                                            });
                                            </script>-->

</div>
