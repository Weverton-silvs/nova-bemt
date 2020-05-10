
                                        <div class="row">


<div class="col-lg-12">
  <div class="card">
    <div class="card-block">
        <h4 class="sub-title">Área de Cadastro</h4>
        <?php
        $id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
//echo $id;
$select = "SELECT * FROM tb_mecanico WHERE id = :id ";
try{
$resultado = $con->prepare($select);
$resultado->bindParam(':id',$id,PDO::PARAM_INT);
$resultado ->execute();
$contar = $resultado->rowCount();
if($contar > 0){
while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
$id = $show->id;
$data = $show->data1;
$setor = $show->setor;
$maq = $show->maquina;
$op = $show->operador;
$mec = $show->mecanico;
$hc = $show->hora_s;
$ini = $show->inicio;
$term = $show->termino;
$qm = $show->qtd_maq;
$def = $show->defeito;
$conc = $show->conserto;



}
}else{
echo '<div class="alert alert-danger"><strong>Aviso!</strong> Não há dados com ID :( </div>';
}
}catch(PDOException $e){
echo "<b>Erro de PDO NO select: </b>".$e -> getMessage();
}

//atualizando Dados
if(isset($_POST['Atualizar'])){
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


$update = "UPDATE tb_mecanico SET data1=:data1,setor=:setor,maquina=:maquina,operador=:operador,
defeito=:defeito,conserto=:conserto,mecanico=:mecanico,hora_s=:hora_s,inicio=:inicio,termino=:termino,qtd_maq=:qtd_maq 
WHERE id =:id";
try{
$result = $con->prepare($update);
$result ->bindValue(':id',$id,PDO::PARAM_STR);
$result ->bindValue(':data1',$data,PDO::PARAM_STR);
$result ->bindValue(':setor',$setor,PDO::PARAM_STR);
$result ->bindValue(':maquina',$maq,PDO::PARAM_STR);
$result ->bindValue(':operador',$op,PDO::PARAM_STR);
$result ->bindValue(':defeito',$def,PDO::PARAM_STR);
$result ->bindValue(':conserto',$conc,PDO::PARAM_STR);
$result ->bindValue(':mecanico',$mec,PDO::PARAM_STR);
$result ->bindValue(':hora_s',$hc,PDO::PARAM_STR);
$result ->bindValue(':inicio',$ini,PDO::PARAM_STR);
$result ->bindValue(':termino',$term,PDO::PARAM_STR);
$result ->bindValue(':qtd_maq',$qm,PDO::PARAM_STR);



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
            <div class="row">
            <div class="col-lg-6">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Data</label>
                <div class="col-sm-10">
                    <input type="text" name="data" value="<?php echo $data;?>" id="data"class="form-control" placeholder="__/__/__">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Setor</label>
                <div class="col-sm-10">
                    <input type="text" name="setor" value="<?php echo $setor;?>" id="setor"class="form-control" placeholder="Digite aqui...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Máquina</label>
                <div class="col-sm-10">
                    <input type="text" name="maquina" value="<?php echo $maq;?>" id="maquina"class="form-control" placeholder="Digite aqui...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">OP</label>
                <div class="col-sm-10">
                    <input type="text" name="operador" value="<?php echo $op;?>" id="operador"class="form-control" placeholder="Digite aqui...">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mec</label>
                <div class="col-sm-10">
                    <input type="text" name="mec" value="<?php echo $mec;?>" id="mec"class="form-control" placeholder="Digite aqui...">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Defeito</label>
                <div class="col-sm-10">
                    <textarea rows="3" cols="5" value="" name="def" id="def" class="form-control" placeholder="Digite aqui..."><?php echo $def;?></textarea>
                </div>
            </div>
            </div>

            <div class="col-lg-6">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hora C</label>
                <div class="col-sm-10">
                    <input type="text" name="horaC" value="<?php echo $hc;?>" id="horaC"class="form-control" placeholder="00:00">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ínicio</label>
                <div class="col-sm-10">
                    <input type="text" name="inicio" value="<?php echo $ini;?>" id="inicio"class="form-control" placeholder="00:00">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Término</label>
                <div class="col-sm-10">
                    <input type="text" name="term" value="<?php echo $term;?>" id="term"class="form-control" placeholder="00:00">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Qtd Máquina</label>
                <div class="col-sm-10">
                    <input type="text" name="qMaq" value="<?php echo $qm;?>" id="qMaq"class="form-control" placeholder="Digite aqui...">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Conserto</label>
                <div class="col-sm-9">
                    <textarea rows="3" cols="5" name="conc" value="" id="conc" class="form-control" placeholder="Digite aqui..."><?php echo $conc;?></textarea>
                </div>
            </div>
            </div>
            
            </div>
            <button style="float:right;"name="Atualizar" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>

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
                            $selectslide = 'SELECT * FROM tb_mecanico ORDER BY id DESC LIMIT 1';
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
                            <button class="btn btn-info btn-icon"> <a style="color:#fff" href="home.php?acaoadmin=mecanico"  title="Voltar"><i class="fa fa-reply"style="text-align:center"></i></a></button>
                              

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
