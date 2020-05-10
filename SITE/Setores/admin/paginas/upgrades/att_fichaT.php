
                                        <div class="row">


<div class="col-lg-12">
  <div class="card">
    <div class="card-block">
        <h4 class="sub-title">Área de Cadastro</h4>
        <?php
                                									$id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
                                    //echo $id;
                                    $select = "SELECT * FROM tb_fichaT Where id = :id ";
                                    try{
                                      $resultado = $con->prepare($select);
                                      $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                                      $resultado ->execute();
                                      $contar = $resultado->rowCount();
                                      if($contar > 0){
                                        while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                                          $id = $show->id;
                                          $img = $show->img;
                                          $fornecedor = $show->fornecedor;
                                          $dataE = $show->dataE;
                                          $marca = $show->marca;
                                          $intec = $show->intec;
                                          $ref = $show->ref;
                                          $estacao = $show->estacao;
                                          $tipo = $show->tipo;
                                          $Sgrup = $show->Sgrup;
                                          $gancho = $show->gancho;
                                          $classe = $show->classe;
                                          $Pcompra = $show->Pcompra;
                                          $descP = $show->descP;
                                          $colecao = $show->colecao;
                                          $Pvenda = $show->Pvenda;
                                          $tecido = $show->tecido;
                                          $comp = $show->comp;
                                          $consumo = $show->consumo;
                                          $cor = $show->cor;
                                          $fornec = $show->fornec;
                                          $artigo = $show->artigo;
                                          $gram = $show->gram;
                                          $preco = $show->preco;
                                          $lavagem = $show->lavagem;
                                          $cod = $show->cod;
                                          $lavan = $show->lavan;
                                          $preco2 = $show->preco2;
                                          $lacre = $show->lacre;
                                          $grade = $show->grade;
                                          $qtd = $show->qtd;
                                          $corte = $show->corte;
                                          $pecas = $show->pecas;
                                          $botao = $show->botao;
                                          $ETcos = $show->ETcos;
                                          $placa = $show->placa;
                                          $rebite = $show->rebite;
                                          $ETint = $show->ETint;
                                          $clipper = $show->clipper;
                                          $titulo = $show->titulo;
                                          $cor2 = $show->cor2;
                                          $fornecedor2 = $show->fornecedor2;
                                          $locall = $show->locall;
                                          $ptsCM = $show->ptsCM;
                                          $catalogo = $show->catalogo;
                                          $EBRN = $show->EBRN;
                                          $larg = $show->larg;
                                          $rendim = $show->rendim;


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
                                        $fornecedor = filter_input(INPUT_POST, 'fornc', FILTER_DEFAULT);
                                        $dataE = filter_input(INPUT_POST, 'dat', FILTER_DEFAULT);
                                        $marca = filter_input(INPUT_POST, 'marca', FILTER_DEFAULT);
                                        $intec = filter_input(INPUT_POST, 'Ni', FILTER_DEFAULT);
                                        $ref = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $estacao = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $tipo = filter_input(INPUT_POST, 'tipo', FILTER_DEFAULT);
                                        $Sgrup = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $gancho = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $classe = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $Pcompra = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $descP = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $colecao = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $Pvenda = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $tecido = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $comp = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $consumo = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $cor = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $fornec = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $artigo = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $gram = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $preco = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $lavagem = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $cod = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $lavan = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $preco2 = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $lacre = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $grade = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $qtd = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $corte = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $pecas = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $botao = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $ETcos = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $placa = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $rebite = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $ETint = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $clipper = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $titulo = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $cor2 = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $fornecedor2 = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $locall = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $ptsCM = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $catalogo = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $EBRN = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $larg = filter_input(INPUT_POST, '', FILTER_DEFAULT);
                                        $rendim = filter_input(INPUT_POST, '', FILTER_DEFAULT);

                                //INFO IMAGEM
                                             if (!empty($_FILES['arquivo']['name'])) {
                                            $file     = $_FILES['arquivo'];
                                            $numFile  = count(array_filter($file['name']));

                                            //PASTA
                                            $folder   = 'imgAdmin/Slide';

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
                                        $update = "UPDATE tb_slide SET img_slide=:foto,titulo_slide=:titulo,subtitulo_slide=:subtitulo WHERE id_slide =:id";
                                        try{
                                          $result = $con->prepare($update);
                                          $result ->bindValue(':id',$id,PDO::PARAM_INT);
                                          $result ->bindValue(':foto',$novoNome,PDO::PARAM_STR);
                                          $result ->bindValue(':titulo',$titulo,PDO::PARAM_STR);
                                          $result ->bindValue(':subtitulo',$subtitulo,PDO::PARAM_STR);




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
                <div class="col-sm-10">
                    <input type="file" name="arquivo[]" id="arquivo" class="form-control" multiple>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Fornecedor:</label>
                    <div class="col-sm-8">
                        <input type="text" name="fornc" id="fornc" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">N INTEC:</label>
                    <div class="col-sm-8">
                        <input type="text" name="NI" id="NI" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tipo:</label>
                    <div class="col-sm-8">
                        <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Descriçao:</label>
                    <div class="col-sm-8">
                        <textarea rows="3" cols="5" name="desc" id="desc" class="form-control" placeholder="Descrição do Produto..."></textarea>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Data:</label>
                    <div class="col-sm-8">
                        <input type="text" name="dat" id="dat" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Referência:</label>
                    <div class="col-sm-8">
                        <input type="text" name="ref" id="ref" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Sub-Grupo:</label>
                    <div class="col-sm-8">
                        <input type="text" name="SG" id="SG" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Classe:</label>
                    <div class="col-sm-8">
                        <input type="text" name="cls" id="cls" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Marca:</label>
                    <div class="col-sm-8">
                        <input type="text" name="marca" id="marca" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Estação:</label>
                    <div class="col-sm-8">
                        <input type="text" name="est" id="est" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Gancho:</label>
                    <div class="col-sm-8">
                        <input type="text" name="gan" id="gan" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Coleção:</label>
                    <div class="col-sm-8">
                        <input type="text" name="cole" id="cole" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                
                
            </div>

            <h6 class="sub-title">Preços</h6>
            <div class="row mb-4">
                <div class="col-lg-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Preço de Compra:</label>
                    <div class="col-sm-8">
                        <input type="text" name="PC" id="PC" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>

                </div>
                <div class="col-lg-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Preço de Venda:</label>
                    <div class="col-sm-8">
                        <input type="text" name="PV" id="PV" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                
                </div>
                
            </div>

            <h6 class="sub-title">Informações Comerciais</h6>
            <div class="row mb-4">
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tecido:</label>
                    <div class="col-sm-8">
                        <input type="text" name="teci" id="teci" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Fornec:</label>
                    <div class="col-sm-8">
                        <input type="text" name="fornc2" id="fornc2" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Largura:</label>
                    <div class="col-sm-8">
                        <input type="text" name="larg" id="larg" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Rendim:</label>
                    <div class="col-sm-8">
                        <input type="text" name="rendim" id="rendim" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Consumo:</label>
                    <div class="col-sm-8">
                        <input type="text" name="consu" id="consu" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Artigo:</label>
                    <div class="col-sm-8">
                        <input type="text" name="art" id="art" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Gram:</label>
                    <div class="col-sm-8">
                        <input type="text" name="gram" id="gram" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Preço:</label>
                    <div class="col-sm-8">
                        <input type="text" name="P" id="P" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cor:</label>
                    <div class="col-sm-8">
                        <input type="text" name="cor" id="cor" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Composição:</label>
                    <div class="col-sm-8">
                        <textarea rows="6" cols="5" name="comp" id="comp" class="form-control" placeholder="Descrição do Produto..."></textarea>
                    </div>
                </div>
                </div>
                
            </div>

            <h6 class="sub-title">Informações de Confecção</h6>
            <div class="row mb-4">
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Lavagem:</label>
                    <div class="col-sm-8">
                        <input type="text" name="lav" id="lav" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Quantidade:</label>
                    <div class="col-sm-8">
                        <input type="text" name="qtd" id="qtd" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Grade:</label>
                    <div class="col-sm-8">
                        <input type="text" name="grade" id="grade" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Botão:</label>
                    <div class="col-sm-8">
                        <input type="text" name="Bt" id="Bt" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Rebite:</label>
                    <div class="col-sm-8">
                        <input type="text" name="reb" id="reb" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Código:</label>
                    <div class="col-sm-8">
                        <input type="text" name="cod" id="cod" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Preço:</label>
                    <div class="col-sm-8">
                        <input type="text" name="P2" id="P2" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Corte:</label>
                    <div class="col-sm-8">
                        <input type="text" name="corte" id="corte" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">EtiquetaCós:</label>
                    <div class="col-sm-8">
                        <input type="text" name="EC" id="EC" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Etiqueta Int.:</label>
                    <div class="col-sm-8">
                        <input type="text" name="EI" id="EI" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Lavanderia:</label>
                    <div class="col-sm-8">
                        <input type="text" name="laved" id="laved" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Lacre:</label>
                    <div class="col-sm-8">
                        <input type="text" name="lac" id="lac" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Peças:</label>
                    <div class="col-sm-8">
                        <input type="text" name="pecas" id="pecas" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Placa:</label>
                    <div class="col-sm-8">
                        <input type="text" name="placa" id="placa" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Clipper:</label>
                    <div class="col-sm-8">
                        <input type="text" name="clpp" id="clpp" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
            </div>

            <h6 class="sub-title">Linha</h6>
            <div class="row mb-4">
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Título:</label>
                    <div class="col-sm-8">
                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Cor:</label>
                    <div class="col-sm-8">
                        <input type="text" name="cor2" id="cor2" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">EB RN:</label>
                    <div class="col-sm-8">
                        <input type="text" name="ebrn" id="ebrn" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                

                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Fornecedor:</label>
                    <div class="col-sm-8">
                        <input type="text" name="fornc3" id="fornc3" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Local:</label>
                    <div class="col-sm-8">
                        <input type="text" name="locall" id="locall" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pontos/CM:</label>
                    <div class="col-sm-8">
                        <input type="text" name="PCM" id="PCM" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Catálogo:</label>
                    <div class="col-sm-8">
                        <input type="text" name="cata" id="cata" class="form-control" placeholder="Digite aqui...">
                    </div>
                </div>
                </div>
            </div>
            <button style="float:right;"name="cadBtn" type="submit"class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
          </form>
  </div>
  <?php
              if(isset($_POST['cadBtn'])){
              $fornc = $_POST['fornc'];
              $NI = $_POST['NI'];
              $tipo = $_POST['tipo'];
              $desc = $_POST['desc'];
              $dat = $_POST['dat'];
              $ref = $_POST['ref'];
              $SG = $_POST['SG'];
              $cls = $_POST['cls'];
              $marca = $_POST['marca'];
              $est = $_POST['est'];
              $gan = $_POST['gan'];
              $cole = $_POST['cole'];
              $PC = $_POST['PC'];
              $PV = $_POST['PV'];
              $teci = $_POST['teci'];
              $fornc2 = $_POST['fornc2'];
              $larg = $_POST['larg'];
              $rendim = $_POST['rendim'];
              $consu = $_POST['consu'];
              $art = $_POST['art'];
              $gram = $_POST['gram'];
              $P = $_POST['P'];
              $cor = $_POST['cor'];
              $comp = $_POST['comp'];
              $lav = $_POST['lav'];
              $qtd = $_POST['qtd'];
              $B = $_POST['Bt'];
              $reb = $_POST['reb'];
              $cod = $_POST['cod'];
              $P2 = $_POST['P2'];
              $EC = $_POST['EC'];
              $EI = $_POST['EI'];
              $laved = $_POST['laved'];
              $lac = $_POST['lac'];
              $placa = $_POST['placa'];
              $clpp = $_POST['clpp'];
              $titulo = $_POST['titulo'];
              $cor2 = $_POST['cor2'];
              $ebrn = $_POST['ebrn'];
              $fornc3 = $_POST['fornc3'];
              $locall = $_POST['locall'];
              $PCM = $_POST['PCM'];
              $cata = $_POST['cata'];
              $grade = $_POST['grade'];
              $corte = $_POST['corte'];
              $pecas = $_POST['pecas'];


              $avatar = $_FILES['arquivo'];
              $numfile = count(array_filter($avatar['name']));

              $folder = 'imgAdmin/fichaT';
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

                        $cadUser = "INSERT INTO tb_fichaT (img,fornecedor,dataE,marca,intec,ref,estacao,tipo,
                        Sgrup,gancho,classe,Pcompra,descP,colecao,Pvenda,tecido,comp,consumo,cor,
                        fornec,artigo,gram,preco,lavagem,cod,lavan,preco2,lacre,grade,qtd,corte,pecas,botao,
                        ETcos,placa,rebite,ETint,clipper,titulo,cor2,fornecedor2,locall,ptsCM,catalogo,EBRN,larg,rendim) 
                        VALUES (:avatar,:fornecedor,:dataE,:marca,:intec,:ref,:estacao,:tipo,
                        :Sgrup,:gancho,:classe,:Pcompra,:descP,:colecao,:Pvenda,:tecido,:comp,:consumo,:cor,
                        :fornec,:artigo,:gram,:preco,:lavagem,:cod,:lavan,:preco2,:lacre,:grade,:qtd,:corte,:pecas,:botao,
                        :ETcos,:placa,:rebite,:ETint,:clipper,:titulo,:cor2,:fornecedor2,:locall,:ptsCM,:catalogo,:EBRN,:larg,:rendim) ";
                        try {
                         $result = $con->prepare($cadUser);
                         $result ->bindParam(':avatar',$novoNome,PDO::PARAM_STR);
                         $result ->bindParam(':fornecedor',$fornc,PDO::PARAM_STR);
                         $result ->bindParam(':dataE',$dat,PDO::PARAM_STR);
                         $result ->bindParam(':marca',$marca,PDO::PARAM_STR);
                         $result ->bindParam(':intec',$NI,PDO::PARAM_STR);
                         $result ->bindParam(':ref',$ref,PDO::PARAM_STR);
                         $result ->bindParam(':estacao',$est,PDO::PARAM_STR);
                         $result ->bindParam(':tipo',$tipo,PDO::PARAM_STR);
                         $result ->bindParam(':Sgrup',$SG,PDO::PARAM_STR);
                         $result ->bindParam(':gancho',$gan,PDO::PARAM_STR);
                         $result ->bindParam(':classe',$cls,PDO::PARAM_STR);
                         $result ->bindParam(':Pcompra',$PC,PDO::PARAM_STR);
                         $result ->bindParam(':descP',$desc,PDO::PARAM_STR);
                         $result ->bindParam(':colecao',$cole,PDO::PARAM_STR);
                         $result ->bindParam(':Pvenda',$PV,PDO::PARAM_STR);
                         $result ->bindParam(':tecido',$teci,PDO::PARAM_STR);
                         $result ->bindParam(':comp',$comp,PDO::PARAM_STR);
                         $result ->bindParam(':consumo',$consu,PDO::PARAM_STR);
                         $result ->bindParam(':cor',$cor,PDO::PARAM_STR);
                         $result ->bindParam(':fornec',$fornc2,PDO::PARAM_STR);
                         $result ->bindParam(':artigo',$art,PDO::PARAM_STR);
                         $result ->bindParam(':gram',$gram,PDO::PARAM_STR);
                         $result ->bindParam(':preco',$P,PDO::PARAM_STR);
                         $result ->bindParam(':lavagem',$lav,PDO::PARAM_STR);
                         $result ->bindParam(':cod',$cod,PDO::PARAM_STR);
                         $result ->bindParam(':lavan',$laved,PDO::PARAM_STR);
                         $result ->bindParam(':preco2',$P2,PDO::PARAM_STR);
                         $result ->bindParam(':lacre',$lac,PDO::PARAM_STR);
                         $result ->bindParam(':grade',$grade,PDO::PARAM_STR);
                         $result ->bindParam(':qtd',$qtd,PDO::PARAM_STR);
                         $result ->bindParam(':corte',$corte,PDO::PARAM_STR);
                         $result ->bindParam(':pecas',$pecas,PDO::PARAM_STR);
                         $result ->bindParam(':botao',$B,PDO::PARAM_STR);
                         $result ->bindParam(':ETcos',$EC,PDO::PARAM_STR);
                         $result ->bindParam(':placa',$placa,PDO::PARAM_STR);
                         $result ->bindParam(':rebite',$reb,PDO::PARAM_STR);
                         $result ->bindParam(':ETint',$EI,PDO::PARAM_STR);
                         $result ->bindParam(':clipper',$clpp,PDO::PARAM_STR);
                         $result ->bindParam(':titulo',$titulo,PDO::PARAM_STR);
                         $result ->bindParam(':cor2',$cor2,PDO::PARAM_STR);
                         $result ->bindParam(':fornecedor2',$fornc3,PDO::PARAM_STR);
                         $result ->bindParam(':locall',$locall,PDO::PARAM_STR);
                         $result ->bindParam(':ptsCM',$PCM,PDO::PARAM_STR);
                         $result ->bindParam(':catalogo',$cata,PDO::PARAM_STR);
                         $result ->bindParam(':EBRN',$ebrn,PDO::PARAM_STR);
                         $result ->bindParam(':larg',$larg,PDO::PARAM_STR);
                         $result ->bindParam(':rendim',$rendim,PDO::PARAM_STR);

                         
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
                            <th>Título</th>
                            <th>SubTítulo</th>
                            <th>Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                            //INICIO
                            $selectslide = 'SELECT * FROM tb_fichaT ORDER BY id DESC LIMIT 3';
                            $contador = 1;
                            try{
                              $resultado = $con -> prepare($selectslide);
                              $resultado -> execute();

                              $consulta = $resultado -> rowCount();
                              if ($consulta >0){
                                while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                            ?>
                        <tr>
                            <th scope="row"><?php echo $mostrar ->id;?></th>
                            <td><?php echo $mostrar ->Sgrup;?></td>
                            <td><?php echo $mostrar ->descP;?></td>
                            <td class="icon-btn">
                            <button class="btn btn-success btn-icon" title="Editar"><a style="color:#fff;" href="home.php?acaoadmin=attfichaT&idUp=<?php echo $mostrar ->id;?>" ><i class="fa fa-pencil-square-o"style="text-align:center"></i></a></button>
                              <button class="btn btn-danger btn-icon" title="Deletar"><a style="color:#fff;"href="paginas/delete/delPaginas.php?idft=<?php echo $mostrar ->id;?>"><i class="fa fa-trash"></i></a></button>
                              
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
