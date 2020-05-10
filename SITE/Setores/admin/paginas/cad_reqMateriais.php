
                                        <div class="row">


<div class="col-lg-12">
  <div class="card">
    <div class="card-block">
        <h4 class="sub-title">Área de Cadastro</h4>
        <form method="post" action="" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Data</label>
                    <div class="col-sm-10">
                        <input type="text" name="data" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Setor</label>
                    <div class="col-sm-10">
                        <input type="text" name="setor" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Qtde</label>
                    <div class="col-sm-10">
                        <input type="text" name="qtd" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ref</label>
                    <div class="col-sm-10">
                        <input type="text" name="ref" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Atend</label>
                    <div class="col-sm-10">
                        <input type="text" name="atend" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Falta</label>
                    <div class="col-sm-10">
                        <select name="falta" class="form-control">
                            <option selected="selected">Sim</option>
                            <option >Justificada</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" name="desc" id="subtitulo"class="form-control" placeholder="Digite aqui..."></textarea>
                    </div>
                </div>
            <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
          </form>
  </div>
  <?php
                if(isset($_POST['cadBtn'])){
                $data = $_POST['data'];
                $setor = $_POST['setor'];
                $qtd = $_POST['qtd'];
                $ref = $_POST['ref'];
                $atend = $_POST['atend'];
                $falta = $_POST['falta'];
                $desc = $_POST['desc'];



                $insert = "INSERT INTO tb_reqMat (descri,qtde,ref,atend,falta,setor,data1) 
                VALUES (:descri,:qtde,:ref,:atend,:falta,:setor,:data1)";
                try {
                  $result = $con->prepare($insert);
                  $result ->bindParam(':descri',$desc,PDO::PARAM_STR);
                  $result ->bindParam(':qtde',$qtd,PDO::PARAM_STR);
                  $result ->bindParam(':ref',$ref,PDO::PARAM_STR);
                  $result ->bindParam(':atend',$atend,PDO::PARAM_STR);
                  $result ->bindParam(':falta',$falta,PDO::PARAM_STR);
                  $result ->bindParam(':setor',$setor,PDO::PARAM_STR);
                  $result ->bindParam(':data1',$data,PDO::PARAM_STR);



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
                            <th>Data</th>
                            <th>Setor</th>
                            <th>Descrição</th>
                            <th>Qtde</th>
                            <th>Ref</th>
                            <th>Atend</th>
                            <th>Falta</th>
                            <th>Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                            //INICIO
                            $selectslide = 'SELECT * FROM tb_reqMat ORDER BY id DESC LIMIT 3';
                            $contador = 1;
                            try{
                              $resultado = $con -> prepare($selectslide);
                              $resultado -> execute();

                              $consulta = $resultado -> rowCount();
                              if ($consulta >0){
                                while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                            ?>
                        <tr>
                            <td><?php echo $mostrar ->data1;?></td>
                            <td><?php echo $mostrar ->setor;?></td>
                            <td><?php echo $mostrar ->descri;?></td>
                            <td><?php echo $mostrar ->qtde;?></td>
                            <td><?php echo $mostrar ->ref;?></td>
                            <td><?php echo $mostrar ->atend;?></td>
                            <td><?php echo $mostrar ->falta;?></td>
                            <td class="icon-btn">
                                <button class="btn btn-success btn-icon"><a style="color:#fff" href="home.php?acaoadmin=attreqmat&idUp=<?php echo $mostrar ->id;?>" title="Voltar"><i class="fa fa-pencil-square-o"style="text-align:center"></i></a></button>
                                <button class="btn btn-danger btn-icon"><a style="color:#fff" href="paginas/delete/delPaginas.php?idDelreqM=<?php echo $mostrar ->id;?>"  title="Deletar"><i class="fa fa-trash"></i></a></button>

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
