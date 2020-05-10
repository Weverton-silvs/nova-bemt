
                                        <div class="row">


<div class="col-lg-12">
  <div class="card">
    <div class="card-block">
        <h4 class="sub-title">Área de Cadastro</h4>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="row">
            <div class="col-lg-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Data</label>
                <div class="col-sm-10">
                    <input type="date" name="data" id="data"class="form-control" >
                </div>
            </div>
            
            <div class="form-group row">
                    <label class="col-sm-10 col-form-label">Mecânico</label>
                    <div class="col-sm-10">
                        <select name="mec" class="form-control">
                            <option selected="selected">a</option>
                            <option >b</option>
                        </select>
                    </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-12">
                    <label class="col-form-label">Hora Chamada</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="horaC" class="form-control hour" data-mask="99:99:99" placeholder="__:__:__">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Defeito</label>
                <div class="col-sm-10">
                    <textarea rows="3" cols="5" name="def" id="def" class="form-control" placeholder="Digite aqui..."></textarea>
                </div>
            </div>
            </div>

            <div class="col-lg-4">

            <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Setor</label>
                    <div class="col-sm-10">
                        <select name="setor" class="form-control">
                            <option selected="selected">a</option>
                            <option >b</option>
                        </select>
                    </div>
            </div>

            
            <div class="row form-group">
                <div class="col-sm-10">
                    <label class="col-form-label">Qtd Maquinas</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="qMaq" class="form-control autonumber" data-v-max="9999" data-v-min="0" placeholder="0000">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">Inicio</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="inicio" class="form-control hour" data-mask="99:99:99"  placeholder="__:__:__">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Conserto</label>
                <div class="col-sm-10">
                    <textarea rows="3" cols="5" name="conc" id="conc" class="form-control" placeholder="Digite aqui..." ></textarea>
                </div>
            </div>
            </div>

            <div class="col-lg-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Máquina</label>
                <div class="col-sm-10">
                    <input type="text" name="maquina" id="maquina"class="form-control"placeholder="Digite aqui..." >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">OP</label>
                <div class="col-sm-10">
                    <input type="text" name="operador" id="operador"class="form-control" placeholder="Digite aqui..." >
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">Término</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="term" class="form-control hour" data-mask="99:99:99" placeholder="__:__:__">
                </div>
            </div>
            
            </div>
            
            </div>
            <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>

          </form>

  </div>
  <?php
        if(isset($_POST['cadBtn'])){
        $data = $_POST['data'];
        $setor = $_POST['setor'];
        $maq = $_POST['maquina'];
        $op = $_POST['operador'];
        $mec = $_POST['mec'];
        $hc = $_POST['horaC'];
        $ini = $_POST['inicio'];
        $term = $_POST['term'];
        $qm = $_POST['qMaq'];
        $def = $_POST['def'];
        $conc = $_POST['conc'];



        $insert = "INSERT INTO tb_mecanico (data1,setor,maquina,operador,defeito,conserto,mecanico,hora_s,inicio,termino,qtd_maq)
         VALUES (:data1,:setor,:maquina,:operador,:defeito,:conserto,:mecanico,:hora_s,:inicio,:termino,:qtd_maq)";
        try {
        $result = $con->prepare($insert);
        $result ->bindParam(':data1',$data,PDO::PARAM_STR);
        $result ->bindParam(':setor',$setor,PDO::PARAM_STR);
        $result ->bindParam(':maquina',$maq,PDO::PARAM_STR);
        $result ->bindParam(':operador',$op,PDO::PARAM_STR);
        $result ->bindParam(':defeito',$def,PDO::PARAM_STR);
        $result ->bindParam(':conserto',$conc,PDO::PARAM_STR);
        $result ->bindParam(':mecanico',$mec,PDO::PARAM_STR);
        $result ->bindParam(':hora_s',$hc,PDO::PARAM_STR);
        $result ->bindParam(':inicio',$ini,PDO::PARAM_STR);
        $result ->bindParam(':termino',$term,PDO::PARAM_STR);
        $result ->bindParam(':qtd_maq',$qm,PDO::PARAM_STR);

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
        <div class="card-block ">
        <div class="dt-responsive table-responsive">
            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Setor</th>
                            <th>Maquina</th>
                            <th>Operador</th>
                            <th>Defeito</th>
                            <th>Conserto</th>
                            <th>Mecânico</th>
                            <th>Hora_C</th>
                            <th>Início</th>
                            <th>Término</th>
                            <th>Qtd_Máquina</th>
                            <th>Edição</th>

                        </tr>
                    </thead>
                    <tbody>

                      <?php
                            //INICIO
                            $selectslide = 'SELECT * FROM tb_mecanico ORDER BY id DESC LIMIT 3';
                            $contador = 1;
                            try{
                              $resultado = $con -> prepare($selectslide);
                              $resultado -> execute();

                              $consulta = $resultado -> rowCount();
                              if ($consulta >0){
                                while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                            ?>
                        <tr>
                            <td><?php echo $mostrar ->id;?></td>
                            <td><?php echo $mostrar ->data1;?></td>
                            <td><?php echo $mostrar ->setor;?></td>
                            <td><?php echo $mostrar ->maquina;?></td>
                            <td><?php echo $mostrar ->operador;?></td>
                            <td><?php echo $mostrar ->defeito;?></td>
                            <td><?php echo $mostrar ->conserto;?></td>
                            <td><?php echo $mostrar ->mecanico;?></td>
                            <td><?php echo $mostrar ->hora_s;?></td>
                            <td><?php echo $mostrar ->inicio;?></td>
                            <td><?php echo $mostrar ->termino;?></td>
                            <td><?php echo $mostrar ->qtd_maq;?></td>
                            <td class="icon-btn">
                            <button class="btn btn-success btn-icon"> <a style="color:#fff" href="home.php?acaoadmin=attmec&idUp=<?php echo $mostrar ->id;?>"  title="Editar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a></button>
                             <button class="btn btn-danger btn-icon"> <a style="color:#fff" href="paginas/delete/delPaginas.php?idDelmec=<?php echo $mostrar ->id;?>" title="Deletar"><i class="fa fa-trash"></i></a></button>
                              

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
