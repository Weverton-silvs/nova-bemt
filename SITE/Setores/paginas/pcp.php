
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Industrial</h4>
                                                </div> 
                                                <div class="col-lg-12">
                                                <?php
                                                                      //INICIO
                                                                      $select = 'SELECT * FROM tb_industrial ORDER BY id DESC LIMIT 1';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($select);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                                      <img src="admin/imgAdmin/Industrial/<?php echo $mostrar -> img;?>" alt="" style="width:100%;
                                                                      heigth: 100px;">
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
                                                <div class="col-lg-12 mt-4">
                                                  <h4 style="text-transform: uppercase; font-size:15px; " ><b>Descrição</b></h4>
                                                  <hr>
                                                </div> 
                                                <div class="col-lg-12 mb-5">
                                                <?php
                                                                      //INICIO
                                                                      $select = 'SELECT * FROM tb_adm ORDER BY id_adm DESC LIMIT 1';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($select);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                    <p class=""><?php echo $mostrar -> descricao;?></p>
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
                                                
                                                <div class="col-lg-12 mt-3">
                                                  <h4 style="text-transform: uppercase; font-size:15px; " ><b>Observações</b></h4>
                                                  <hr>
                                                </div> 
                                                <div class="col-lg-12">
                                                <?php
                                                                      //INICIO
                                                                      $select = 'SELECT * FROM tb_adm ORDER BY id_adm DESC LIMIT 1';
                                                                      $contador = 1;
                                                                      try{
                                                                        $resultado = $con -> prepare($select);
                                                                        $resultado -> execute();

                                                                        $consulta = $resultado -> rowCount();
                                                                        if ($consulta >0){
                                                                          while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                                                      ?>
                                                    <p><?php echo $mostrar -> observacao;?></p>
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
