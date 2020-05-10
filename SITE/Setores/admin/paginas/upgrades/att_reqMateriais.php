
                                        <div class="row">


<div class="col-lg-12">
  <div class="card">
    <div class="card-block">
        <h4 class="sub-title">Área de Cadastro</h4>
        <?php
        $id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
//echo $id;
$select = "SELECT * FROM tb_reqMat WHERE id = :id ";
try{
$resultado = $con->prepare($select);
$resultado->bindParam(':id',$id,PDO::PARAM_INT);
$resultado ->execute();
$contar = $resultado->rowCount();
if($contar > 0){
while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
$id = $show->id;
$descri = $show->descri;
$qtde = $show->qtde;
$ref = $show->ref;
$atend = $show->atend;
$falta = $show->falta;
$setor = $show->setor;
$data1 = $show->data1;



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
$qtde = $_POST['qtd'];
$ref = $_POST['ref'];
$atend = $_POST['atend'];
$falta = $_POST['falta'];
$desc = $_POST['desc'];


$update = "UPDATE tb_reqMat SET descri=:descri,qtde=:qtde,ref=:ref,atend=:atend,falta=:falta,setor=:setor,
data1=:data1 WHERE id =:id";
try{
$result = $con->prepare($update);
$result ->bindValue(':id',$id,PDO::PARAM_INT);
$result ->bindValue(':descri',$desc,PDO::PARAM_STR);
$result ->bindValue(':qtde',$qtde,PDO::PARAM_STR);
$result ->bindValue(':ref',$ref,PDO::PARAM_STR);
$result ->bindValue(':atend',$atend,PDO::PARAM_STR);
$result ->bindValue(':falta',$falta,PDO::PARAM_STR);
$result ->bindValue(':setor',$setor,PDO::PARAM_STR);
$result ->bindValue(':data1',$data,PDO::PARAM_STR);



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
        <form method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Data</label>
                    <div class="col-sm-10">
                        <input type="text" name="data" value="<?php echo $data1;?>"  id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Setor</label>
                    <div class="col-sm-10">
                        <input type="text" name="setor" value="<?php echo $setor;?>" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Qtde</label>
                    <div class="col-sm-10">
                        <input type="text" name="qtd" value="<?php echo $qtde;?>"  id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ref</label>
                    <div class="col-sm-10">
                        <input type="text" name="ref" value="<?php echo $ref;?>" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Atend</label>
                    <div class="col-sm-10">
                        <input type="text" name="atend" value="<?php echo $atend;?>" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Falta</label>
                    <div class="col-sm-10">
                        <select name="falta" class="form-control">
                            <option selected="selected"><?php 
                             echo $falta;
                                if($falta == "Sim"){
                                echo "<option >Justificada </option>";
                                }elseif ($falta == "Justificada") {
                                    echo "<option >Sim </option>";
                                }
                                
                                
                                ?> </option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" name="desc" id="subtitulo"class="form-control" placeholder="Digite aqui..."><?php echo $setor;?></textarea>
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
                                <button class="btn btn-info btn-icon"><a style="color:#fff" href="home.php?acaoadmin=reqmat" title="Voltar"><i class="fa fa-reply"style="text-align:center"></i></a></button>
                               
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
