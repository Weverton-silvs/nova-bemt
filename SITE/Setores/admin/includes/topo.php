<?php
ob_start();
session_start();
if (!isset($_SESSION['email']) && (!isset($_SESSION['senha']))) {
  header("Location: index.php?acao=negado");
  exit;
}
include_once('conexao/conect.php');
include_once('sair.php');
?>
<html lang="pt-BR">

<head>
    <title>BEMTJeans - Admin </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\owl.carousel\css\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\owl.carousel\css\owl.theme.default.css">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\swiper\css\swiper.min.css">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="files\bower_components\jquery.steps\css\jquery.steps.css">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\datedropper\css\datedropper.min.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\icofont\css\icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\font-awesome\css\font-awesome.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">

    <script type="text/javascript">
    function dragStart(acao) {
      acao.dataTransfer.effectAll='move';
      acao.dataTransfer.setData("ID", acao.target.getAttribute('id'));
      acao.dataTransfer.setDragImage(acao.target,0,0);
    }
    function dragOver(acao) {
      var produtoSelecionado = acao.dataTransfer.getData("ID");
      var id = acao.target.getAttribute("id");
      if ((produtoSelecionado == 'item1' || produtoSelecionado == 'item2' || produtoSelecionado == 'item3') && (id == 'div1' || id == 'div2')) 
        return false;
      else
        return true;
      
    }
    function dragDrop(acao) {
      var produtoSelecionado = acao.dataTransfer.getData("ID");
      acao.target.appendChild(document.getElementById(produtoSelecionado));
      acao.stopPropagation();
      return false;
    }
    </script>

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="files\assets\images\logo1.png" style="width:100px;" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
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
                                        <img src="imgAdmin/Perfil/<?php echo $mostrar ->img;?>" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $mostrar ->nome;?></span>
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
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="home.php?acaoadmin=perfil">
                                                <i class="feather icon-user"></i> Meu perfil
                                            </a>
                                        </li>

                                        <li>
                                            <a href="?sair">
                                                <i class="feather icon-log-out"></i> Sair
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                          <div class="pcoded-navigatio-lavel">Bem Vindo</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="home.php">
                                      <span class="pcoded-micon"><i class="fa fa-th"></i></span>
                                      <span class="pcoded-mtext">Home</span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigatio-lavel">Gerenciamento Empresa</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="home.php?acaoadmin=mecanico">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Mecânico</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=req">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Requisição</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=reqIO">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Req. In/Out</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=reqmat">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Req. Materiais</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=fichaT">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Ficha Tec.</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=troca">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Área de Troca.</span>
                                  </a>
                              </li>
                              
                              <li class="">
                                  <a href="home.php?acaoadmin=fichaC">
                                      <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                      <span class="pcoded-mtext">Ficha Custo</span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigatio-lavel">Gerenciamento do Perfil</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="home.php?acaoadmin=perfil">
                                      <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                      <span class="pcoded-mtext">Meu Perfil</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=caduser">
                                      <span class="pcoded-micon"><i class="fa fa-user-plus"></i></span>
                                      <span class="pcoded-mtext">Add Usuário</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="home.php?acaoadmin=manual">
                                      <span class="pcoded-micon"><i class="fa fa-user-plus"></i></span>
                                      <span class="pcoded-mtext">Manual</span>
                                  </a>
                              </li>
                              <li class="">
                                  <a href="?sair">
                                      <span class="pcoded-micon"><i class="fa fa-share-square-o"></i></span>
                                      <span class="pcoded-mtext">Sair</span>
                                  </a>
                              </li>
                          </ul>
                            <div class="pcoded-navigatio-lavel">Gerenciamento do Site</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Home</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadslide">
                                                <span class="pcoded-mtext">Slide</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                            //INICIO
                                            $selectslide = 'SELECT * FROM tb_user1 WHERE email=:email AND senha=:senha AND industrial="1"';
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
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-cubes"></i></span>
                                        <span class="pcoded-mtext">Empresa</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadsobre">
                                                <span class="pcoded-mtext">Sobre Nós</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadval">
                                                <span class="pcoded-mtext">Valores</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                                //FIM
                                                }
                                                }else{
                                                echo '';
                                                }
                                                }catch(PDOException $e){
                                                echo 'ERRO DE SELECT DO PDO: '.$e;
                                                }
                                                ?>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="home.php?acaoadmin=galeria">
                                            <span class="pcoded-micon"><i class="fa fa-th"></i></span>
                                            <span class="pcoded-mtext">Galeria</span>
                                        </a>
                                    </li>
                                </ul>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-phone"></i></span>
                                        <span class="pcoded-mtext">Contato</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadctt">
                                                <span class="pcoded-mtext">Meios de Contato</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadcoment">
                                                <span class="pcoded-mtext">Comentários</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Matriz</span>
                                    </a>
                                    <ul class="pcoded-submenu">
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
                                              $resultado-> execute();

                                              $consulta = $resultado -> rowCount();
                                              if ($consulta >0){
                                                while ($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){

                                            	$empresa = $mostrar->empresa;
                                        		if ($empresa == "sim") {
                                        			echo '<li class=" ">
                                            <a href="home.php?acaoadmin=cadadm">
                                                <span class="pcoded-mtext">Industrial</span>
                                            </a>
                                        </li>';
                                        		}elseif (condition) {
                                        			# code...
                                        		}
                                        
                                                //FIM
                                                }
                                                }else{
                                                echo '';
                                                }
                                                }catch(PDOException $e){
                                                echo 'ERRO DE SELECT DO PDO: '.$e;
                                                }
                                                ?>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadalmox">
                                                <span class="pcoded-mtext">Costura I</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=caddesen">
                                                <span class="pcoded-mtext">Costura II</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadengP">
                                                <span class="pcoded-mtext">Costura III</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadgeren">
                                                <span class="pcoded-mtext">Costura IV</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadpcp">
                                                <span class="pcoded-mtext">Costura V</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Acabamento I</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Acabamento II</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Eng. da Produção</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Laser</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Mecânica</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">PCP</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Preparação</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Qualidade</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Serv. Gerais</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Corte</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Administrativo</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Desenvolvimento</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Bordado</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Pré-Grupo</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Pró-Grupo</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Almoxarifado</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Modelagem</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Aprendiz</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Elétrica</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Estilo</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Pilotagem</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Sublimação</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Afastados</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Manutenção</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Informática</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadti">
                                                <span class="pcoded-mtext">Loja</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Mão de Obra Direta</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod1">
                                                <span class="pcoded-mtext">Administrativo</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod2">
                                                <span class="pcoded-mtext">Almoxarifado</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Borbado</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Lavanderia Industrial</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod1">
                                                <span class="pcoded-mtext">Used</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod2">
                                                <span class="pcoded-mtext">Lixado</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Passadoria</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Caldeira</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Lavanderia</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">PCP</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Mecânica</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Desenvolvimento</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Elétrica</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Cozinha Química</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Industrial</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Serv. Gerais</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Laser</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Diferenciado</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                        <span class="pcoded-mtext">Linx</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod1">
                                                <span class="pcoded-mtext">Módulo-1</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod2">
                                                <span class="pcoded-mtext">Módulo-2</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="home.php?acaoadmin=cadmod3">
                                                <span class="pcoded-mtext">Módulo-3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                  <!-- Page-body start -->
                                  <div class="page-body">
