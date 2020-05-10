
                                        <div class="row">


                                          <div class="col-lg-12">
                                            <div class="card">
                                              <div class="card-block">
                                                  <h4 class="sub-title">Área de Cadastro</h4>
                                                  <?php
                                        $id = filter_input(INPUT_GET,'idUp', FILTER_DEFAULT );
                                    //echo $id;
                                    $select = "SELECT * FROM tb_user1 Where id_user1 = :id ";
                                    try{
                                      $resultado = $con->prepare($select);
                                      $resultado->bindParam(':id',$id,PDO::PARAM_INT);
                                      $resultado->execute();
                                      $contar = $resultado->rowCount();
                                      if($contar > 0){
                                        while ($show = $resultado->FETCH(PDO::FETCH_OBJ)) {
                                          $id = $show->id_user1;
                                          $img = $show->img;
                                          $nome = $show->nome;
                                          $matricula = $show->matricula;
                                          $email = $show->email;
                                          $senha = $show->senha;

                                          $industrial = $show->industrial;
                                          $costura1 = $show->costuraI;
                                          $costura2 = $show->costuraII;
                                          $costura3 = $show->costuraIII;
                                          $costura4 = $show->costuraIV;
                                          $costura5 = $show->costuraV;
                                          $acabamento1 = $show->acabamentoI;
                                          $acabamento2 = $show->acabamentoII;
                                          $eng_producao = $show->eng_producao;
                                          $laser = $show->laser;
                                          $mecanica = $show->mecanica;
                                          $pcp = $show->pcp;
                                          $preparacao = $show->preparacao;
                                          $qualidade = $show->qualidade;
                                          $serv_gerais = $show->serv_gerais;
                                          $corte = $show->corte;
                                          $administrativo = $show->administrativo;
                                          $desenvolvimento = $show->desenvolvimento;
                                          $bordado = $show->bordado;
                                          $pre_grupo = $show->pre_grupo;
                                          $pos_grupo = $show->pos_grupo;
                                          $almoxarifado = $show->almoxarifado;
                                          $modelagem = $show->modelagem;
                                          $aprendiz = $show->aprendiz;
                                          $eletrica = $show->eletrica;
                                          $estilo = $show->estilo;
                                          $pilotagem = $show->pilotagem;
                                          $sublimacao = $show->sublimacao;
                                          $afastados = $show->afastados;
                                          $manutencao = $show->manutencao;
                                          $informatica = $show->informatica;
                                          $loja = $show->loja;
                                          $administrativo2 = $show->administrativo2;
                                          $almoxarifado2 = $show->almoxarifado2;
                                          $bordado2 = $show->bordado2;
                                          $used = $show->used;
                                          $lixado = $show->lixado;
                                          $passadoria = $show->passadoria;
                                          $caldeira = $show->caldeira;
                                          $lavanderia = $show->lavanderia;
                                          $pcp2 = $show->pcp2;
                                          $mecanica2 = $show->mecanica2;
                                          $desenvolvimento2 = $show->desenvolvimento2;
                                          $eletrica2 = $show->eletrica2;
                                          $cozinha_quimica = $show->cozinha_quimica;
                                          $serv_gerais2 = $show->serv_gerais2;
                                          $industrial2 = $show->industrial2;
                                          $laser2 = $show->laser2;
                                          $diferenciado = $show->diferenciado;

                                        }
                                      }else{
                                      echo '<div class="alert alert-danger"><strong>Aviso!</strong> Não há dados com ID :( </div>';
                                      }
                                    }catch(PDOException $e){
                                      echo "<b>Erro de PDO NO select: </b>".$e->getMessage();
                                    }
                                    //Atualizando dados
                                    $novoNome = $img;
                          if (isset($_POST['Atualizar'])) {
                            $img = filter_input(INPUT_POST, 'arquivo',FILTER_DEFAULT);
                            $nome = filter_input(INPUT_POST, 'nome',FILTER_DEFAULT);
                            $matricula = filter_input(INPUT_POST, 'matricula',FILTER_DEFAULT);
                            $email = filter_input(INPUT_POST, 'email',FILTER_DEFAULT);
                            $senha = filter_input(INPUT_POST, 'senha',FILTER_DEFAULT);
                            $industrial = isset($_POST['industrial']) ? $_POST['industrial'] : '0';
                            $costura1 = isset($_POST['costura1']) ? $_POST['costura1'] : '0';
                            $costura2 = isset($_POST['costura2']) ? $_POST['costura2'] : '0';
                            $costura3 = isset($_POST['costura3']) ? $_POST['costura3'] : '0';
                            $costura4 = isset($_POST['costura4']) ? $_POST['costura4'] : '0';
                            $costura5 = isset($_POST['costura5']) ? $_POST['costura5'] : '0';
                            $acabamento1 = isset($_POST['acabamento1']) ? $_POST['acabamento1'] : '0';
                            $acabamento2 = isset($_POST['acabamento2']) ? $_POST['acabamento2'] : '0';
                            $eng_producao = isset($_POST['eng_producao']) ? $_POST['eng_producao'] : '0';
                            $laser = isset($_POST['laser']) ? $_POST['laser'] : '0';
                            $mecanica = isset($_POST['mecanica']) ? $_POST['mecanica'] : '0';
                            $pcp = isset($_POST['pcp']) ? $_POST['pcp'] : '0';
                            $preparacao = isset($_POST['preparacao']) ? $_POST['preparacao'] : '0';
                            $qualidade = isset($_POST['qualidade']) ? $_POST['qualidade'] : '0';
                            $serv_gerais = isset($_POST['serv_gerais']) ? $_POST['serv_gerais'] : '0';
                            $corte = isset($_POST['corte']) ? $_POST['corte'] : '0';
                            $administrativo = isset($_POST['administrativo']) ? $_POST['administrativo'] : '0';
                            $desenvolvimento = isset($_POST['desenvolvimento']) ? $_POST['desenvolvimento'] : '0';
                            $bordado = isset($_POST['bordado']) ? $_POST['bordado'] : '0';
                            $pre_grupo = isset($_POST['pre_grupo']) ? $_POST['pre_grupo'] : '0';
                            $pos_grupo = isset($_POST['pos_grupo']) ? $_POST['pos_grupo'] : '0';
                            $almoxarifado = isset($_POST['almoxarifado']) ? $_POST['almoxarifado'] : '0';
                            $modelagem = isset($_POST['modelagem']) ? $_POST['modelagem'] : '0';
                            $aprendiz = isset($_POST['aprendiz']) ? $_POST['aprendiz'] : '0';
                            $eletrica = isset($_POST['eletrica']) ? $_POST['eletrica'] : '0';
                            $estilo = isset($_POST['estilo']) ? $_POST['estilo'] : '0';
                            $pilotagem = isset($_POST['pilotagem']) ? $_POST['pilotagem'] : '0';
                            $sublimacao = isset($_POST['sublimacao']) ? $_POST['sublimacao'] : '0';
                            $afastados = isset($_POST['afastados']) ? $_POST['afastados'] : '0';
                            $manutencao = isset($_POST['manutencao']) ? $_POST['manutencao'] : '0';
                            $informatica = isset($_POST['informatica']) ? $_POST['informatica'] : '0';
                            $loja = isset($_POST['loja']) ? $_POST['loja'] : '0';
                            $administrativo2 = isset($_POST['administrativo2']) ? $_POST['administrativo2'] : '0';
                            $almoxarifado2 = isset($_POST['almoxarifado2']) ? $_POST['almoxarifado2'] : '0';
                            $bordado2 = isset($_POST['bordado2']) ? $_POST['bordado2'] : '0';
                            $used = isset($_POST['used']) ? $_POST['used'] : '0';
                            $lixado = isset($_POST['lixado']) ? $_POST['lixado'] : '0';
                            $passadoria = isset($_POST['passadoria']) ? $_POST['passadoria'] : '0';
                            $caldeira = isset($_POST['caldeira']) ? $_POST['caldeira'] : '0';
                            $lavanderia = isset($_POST['lavanderia']) ? $_POST['lavanderia'] : '0';
                            $pcp2 = isset($_POST['pcp2']) ? $_POST['pcp2'] : '0';
                            $mecanica2 = isset($_POST['mecanica2']) ? $_POST['mecanica2'] : '0';
                            $desenvolvimento2 = isset($_POST['desenvolvimento2']) ? $_POST['desenvolvimento2'] : '0';
                            $eletrica2 = isset($_POST['eletrica2']) ? $_POST['eletrica2'] : '0';
                            $cozinha_quimica = isset($_POST['cozinha_quimica']) ? $_POST['cozinha_quimica'] : '0';
                            $serv_gerais2 = isset($_POST['serv_gerais2']) ? $_POST['serv_gerais2'] : '0';
                            $industrial2 = isset($_POST['industrial2']) ? $_POST['industrial2'] : '0';
                            $laser2 = isset($_POST['laser2']) ? $_POST['laser2'] : '0';
                            $diferenciado = isset($_POST['diferenciado']) ? $_POST['diferenciado'] : '0';


                                //INFO IMAGEM
                                             if (!empty($_FILES['arquivo']['name'])) {
                                            $file = $_FILES['arquivo'];
                                            $numFile = count(array_filter($file['name']));

                                            //PASTA
                                            $folder = 'imgAdmin/Perfil';

                                            //REQUISITOS
                                            $permite = array('image/jpeg', 'image/png', 'image/jpg', 'image/gif');
                                            $maxSize = 1024 * 1024 * 5;

                                            //MENSAGENS
                                            $msg = array();
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
                $update = "UPDATE tb_user1 SET img=:img,nome=:nome,matricula=:matricula,email=:email,
                senha=:senha,industrial=:industrial,
                costuraI=:costura1,costuraII=:costura2,costuraIII=:costura3,costuraIV=:costura4,
                costuraV=:costura5,
                acabamentoI=:acabamento1,acabamentoII=:acabamento2,eng_producao=:eng_producao,laser=:laser,
                mecanica=:mecanica,pcp=:pcp,
                preparacao=:preparacao,qualidade=:qualidade,serv_gerais=:serv_gerais,corte=:corte,
                administrativo=:administrativo,
                desenvolvimento=:desenvolvimento,bordado=:bordado,pre_grupo=:pre_grupo,pos_grupo=:pos_grupo,
                almoxarifado=:almoxarifado,
                modelagem=:modelagem,aprendiz=:aprendiz,eletrica=:eletrica,estilo=:estilo,pilotagem=:pilotagem,
                sublimacao=:sublimacao,
                afastados=:afastados,manutencao=:manutencao,informatica=:informatica,loja=:loja,
                administrativo2=:administrativo2,
                almoxarifado2=:almoxarifado2,bordado2=:bordado2,used=:used,lixado=:lixado,passadoria=:passadoria,
                caldeira=:caldeira,
                lavanderia=:lavanderia,pcp2=:pcp2,mecanica2=:mecanica2,desenvolvimento2=:desenvolvimento2,
                eletrica2=:eletrica2,
                cozinha_quimica=:cozinha_quimica,industrial2=:industrial2,serv_gerais2=:serv_gerais2,laser2=:laser2,
                diferenciado=:diferenciado WHERE id_user1 =:id";
                                        try{
                                          $result = $con->prepare($update);
                                          $result->bindValue(':id',$id,PDO::PARAM_INT);
                                          $result->bindValue(":img",$novoNome,PDO::PARAM_STR);
                                          $result->bindValue(":nome",$nome,PDO::PARAM_STR);
                                          $result->bindValue(":matricula",$matricula,PDO::PARAM_STR);
                                          $result->bindValue(":email",$email,PDO::PARAM_STR);
                                          $result->bindValue(":senha",$senha,PDO::PARAM_STR);
                                          $result->bindValue(":industrial",$industrial,PDO::PARAM_INT);
                                          $result->bindValue(":costura1",$costura1,PDO::PARAM_INT);
                                          $result->bindValue(":costura2",$costura2,PDO::PARAM_INT);
                                          $result->bindValue(":costura3",$costura3,PDO::PARAM_INT);
                                          $result->bindValue(":costura4",$costura4,PDO::PARAM_INT);
                                          $result->bindValue(":costura5",$costura5,PDO::PARAM_INT);
                                          $result->bindValue(":acabamento1",$acabamento1,PDO::PARAM_INT);
                                          $result->bindValue(":acabamento2",$acabamento2,PDO::PARAM_INT);
                                          $result->bindValue(":eng_producao",$eng_producao,PDO::PARAM_INT);
                                          $result->bindValue(":laser",$laser,PDO::PARAM_INT);
                                          $result->bindValue(":mecanica",$mecanica,PDO::PARAM_INT);
                                          $result->bindValue(":pcp",$pcp,PDO::PARAM_INT);
                                          $result->bindValue(":preparacao",$preparacao,PDO::PARAM_INT);
                                          $result->bindValue(":qualidade",$qualidade,PDO::PARAM_INT);
                                          $result->bindValue(":serv_gerais",$serv_gerais,PDO::PARAM_INT);
                                          $result->bindValue(":corte",$corte,PDO::PARAM_INT);
                                          $result->bindValue(":administrativo",$administrativo,PDO::PARAM_INT);
                                          $result->bindValue(":desenvolvimento",$desenvolvimento,PDO::PARAM_INT);
                                          $result->bindValue(":bordado",$bordado,PDO::PARAM_INT);
                                          $result->bindValue(":pre_grupo",$pre_grupo,PDO::PARAM_INT);
                                          $result->bindValue(":pos_grupo",$pos_grupo,PDO::PARAM_INT);
                                          $result->bindValue(":almoxarifado",$almoxarifado,PDO::PARAM_INT);
                                          $result->bindValue(":modelagem",$modelagem,PDO::PARAM_INT);
                                          $result->bindValue(":aprendiz",$aprendiz,PDO::PARAM_INT);
                                          $result->bindValue(":eletrica",$eletrica,PDO::PARAM_INT);
                                          $result->bindValue(":estilo",$estilo,PDO::PARAM_INT);
                                          $result->bindValue(":pilotagem",$pilotagem,PDO::PARAM_INT);
                                          $result->bindValue(":sublimacao",$sublimacao,PDO::PARAM_INT);
                                          $result->bindValue(":afastados",$afastados,PDO::PARAM_INT);
                                          $result->bindValue(":manutencao",$manutencao,PDO::PARAM_INT);
                                          $result->bindValue(":informatica",$informatica,PDO::PARAM_INT);
                                          $result->bindValue(":loja",$loja,PDO::PARAM_INT);
                                          $result->bindValue(":administrativo2",$administrativo2,PDO::PARAM_INT);
                                          $result->bindValue(":almoxarifado2",$almoxarifado2,PDO::PARAM_INT);
                                          $result->bindValue(":bordado2",$bordado2,PDO::PARAM_INT);
                                          $result->bindValue(":used",$used,PDO::PARAM_INT);
                                          $result->bindValue(":lixado",$lixado,PDO::PARAM_INT);
                                          $result->bindValue(":passadoria",$passadoria,PDO::PARAM_INT);
                                          $result->bindValue(":caldeira",$caldeira,PDO::PARAM_INT);
                                          $result->bindValue(":lavanderia",$lavanderia,PDO::PARAM_INT);
                                          $result->bindValue(":pcp2",$pcp2,PDO::PARAM_INT);
                                          $result->bindValue(":mecanica2",$mecanica2,PDO::PARAM_INT);
                                          $result->bindValue(":desenvolvimento2",$desenvolvimento2,PDO::PARAM_INT);
                                          $result->bindValue(":eletrica2",$eletrica2,PDO::PARAM_INT);
                                          $result->bindValue(":cozinha_quimica",$cozinha_quimica,PDO::PARAM_INT);
                                          $result->bindValue(":industrial2",$industrial2,PDO::PARAM_INT);
                                          $result->bindValue(":serv_gerais2",$serv_gerais2,PDO::PARAM_INT);
                                          $result->bindValue(":laser2",$laser2,PDO::PARAM_INT);
                                          $result->bindValue(":diferenciado",$diferenciado,PDO::PARAM_INT);

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
                            <input type="file" name="arquivo[]" id="nome" class="form-control" placeholder="Digite aqui...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="nome" value="<?php echo $nome ?>" id="nome" class="form-control" placeholder="Digite aqui...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Matrícula</label>
                        <div class="col-sm-10">
                            <input type="text" name="matricula" value="<?php echo $matricula ?>" id="matricula" class="form-control" placeholder="Digite aqui...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="<?php echo $email ?>" id="email" class="form-control" placeholder="Digite aqui...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-10">
                            <input type="text" name="senha" value="<?php echo $senha ?>" id="senha" class="form-control" placeholder="Digite aqui...">
                        </div>
                    </div>
                    <br>
                    <!-- Início Matriz -->
                  <h4 class="sub-title">Matriz</h4>
                   <div class="row" style="margin-left: 20px;">
                   <div class="col-lg-2">
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                            <label class="col-form-label">
                                <span>Industrial</span>
                                <input type="checkbox" name="industrial" <?= $industrial == '1' ? 'checked' : '' ?> value="1">
                                <span class="cr">
                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                  <div class="form-group row">
                  <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Costura I</span>
                          <input type="checkbox" name="costura1" <?= $costura1 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Costura II</span>
                          <input type="checkbox" name="costura2" <?= $costura2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Costura III</span>
                          <input type="checkbox" name="costura3" <?= $costura3 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Costura IV</span>
                          <input type="checkbox" name="costura4" <?= $costura4 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Costura V</span>
                          <input type="checkbox" name="costura5" <?= $costura5 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Acabamento I</span>
                          <input type="checkbox" name="acabamento1" <?= $acabamento1 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                    </div>
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Acabamento II</span>
                          <input type="checkbox" name="acabamento2" <?= $acabamento2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                    </div>
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Eng. de Produção</span>
                          <input type="checkbox" name="eng_producao" <?= $eng_producao == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                    </div>
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Laser</span>
                          <input type="checkbox" name="laser" <?= $laser == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                    </div>
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Mecânica</span>
                          <input type="checkbox" name="mecanica" <?= $mecanica == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                    </div>
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>PCP</span>
                          <input type="checkbox" name="pcp" <?= $pcp == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Preparação</span>
                          <input type="checkbox" name="preparacao" <?= $preparacao == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Qualidade</span>
                          <input type="checkbox" name="qualidade" <?= $qualidade == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Serv. Gerais</span>
                          <input type="checkbox" name="serv_gerais" <?= $serv_gerais == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Corte</span>
                          <input type="checkbox" name="corte" <?= $corte == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Administrativo</span>
                          <input type="checkbox" name="administrativo" <?= $administrativo == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Desenvolvimento</span>
                          <input type="checkbox" name="desenvolvimento" <?= $desenvolvimento == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Bordado</span>
                          <input type="checkbox" name="bordado" <?= $bordado == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Pré-Grupo</span>
                          <input type="checkbox" name="pre_grupo" <?= $pre_grupo == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Pós-Grupo</span>
                          <input type="checkbox" name="pos_grupo" <?= $pos_grupo == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Almoxarifado</span>
                          <input type="checkbox" name="almoxarifado" <?= $almoxarifado == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Modelagem</span>
                          <input type="checkbox" name="modelagem" <?= $modelagem == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Aprendiz</span>
                          <input type="checkbox" name="aprendiz" <?= $aprendiz == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Elétrica</span>
                          <input type="checkbox" name="eletrica" <?= $eletrica == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Estilo</span>
                          <input type="checkbox" name="estilo" <?= $estilo == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Pilotagem</span>
                          <input type="checkbox" name="pilotagem" <?= $pilotagem == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  </div>
                  <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Sublimação</span>
                          <input type="checkbox" name="sublimacao" <?= $sublimacao == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Afastados</span>
                          <input type="checkbox" name="afastados" <?= $afastados == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Manutenção</span>
                          <input type="checkbox" name="manutencao" <?= $manutencao == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Informática</span>
                          <input type="checkbox" name="informatica" <?= $informatica == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Loja</span>
                          <input type="checkbox" name="loja" <?= $loja == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  </div>
                  </div>

                  <!-- Início mão de obra direta -->
                  <br>
                  <h4 class="sub-title">Mão de obra direta</h4>
                  <div class="row" style="margin-left: 20px;">
                    <div class="col-lg-4">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Administrativo</span>
                          <input type="checkbox" name="administrativo2" <?= $administrativo2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                    <div class="col-lg-4">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Almoxarifado</span>
                          <input type="checkbox" name="almoxarifado2" <?= $almoxarifado2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  </div>
                    <div class="col-lg-4">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Bordado</span>
                          <input type="checkbox" name="bordado2" <?= $bordado2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                  </div>

                  <!-- Início da Lavanderia Industrial -->
                  <br>
                  <h4 class="sub-title">Lavanderia Industrial</h4>
                  <div class="row" style="margin-left: 20px;">
                    <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Used</span>
                          <input type="checkbox" name="used" <?= $used == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Lixado</span>
                          <input type="checkbox" name="lixado" <?= $lixado == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Passadoria</span>
                          <input type="checkbox" name="passadoria" <?= $passadoria == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                    <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Caldeira</span>
                          <input type="checkbox" name="caldeira" <?= $caldeira == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Lavanderia</span>
                          <input type="checkbox" name="lavanderia" <?= $lavanderia == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>PCP</span>
                          <input type="checkbox" name="pcp2" <?= $pcp2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                    <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Mecânica</span>
                          <input type="checkbox" name="mecanica2" <?= $mecanica2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Desenvolvimento</span>
                          <input type="checkbox" name="desenvolvimento2" <?= $desenvolvimento2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                    <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Elétrica</span>
                          <input type="checkbox" name="eletrica2" <?= $eletrica2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Cozinha Química</span>
                          <input type="checkbox" name="cozinha_quimica" <?= $cozinha_quimica == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                    <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Industrial</span>
                          <input type="checkbox" name="industrial2" <?= $industrial2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Serv. Gerais</span>
                          <input type="checkbox" name="serv_gerais2" <?= $serv_gerais2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                    <div class="col-lg-2">
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Laser</span>
                          <input type="checkbox" name="laser2" <?= $laser2 == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                  <div class="form-group row">
                      <div class="checkbox-fade fade-in-bemt cr">
                    <label class="col-form-label">
                          <span>Diferenciado</span>
                          <input type="checkbox" name="diferenciado" <?= $diferenciado == '1' ? 'checked' : '' ?> value="1">
                          <span class="cr">
                              <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                          </span>
                      </label>
                  </div>
                  </div>
                    </div>
                  </div>
                  <button style="float:right;" name="Atualizar" type="submit" class="btn btn-success btn-round"><i class="icofont icofont-check"></i>Cadastrar</button>
                  <button style="float:right; margin-left: 100px;" class="btn btn-info btn-icon"><a style="color:#fff" href="home.php?acaoadmin=caduser" title="Voltar"><i class="fa fa-reply"style="text-align:center"></i></a></button>
                  
              </form>
                </div>
              </div>
           </div>