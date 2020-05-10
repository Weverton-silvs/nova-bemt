<?php
include_once('conexao/conect.php');
?>
<html lang="pt-BR">

<head>
    <title>Setores - BEMTJeans </title>
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
                        <a href="../index.php">
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
                            <div class="pcoded-navigatio-lavel">Setores</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=indus">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Industrial</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=cos1">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Costura I</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=cos3">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Costura III</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=cos4">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Costura IV</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=aca">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Acabamento</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=eg">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Eng. Produção</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=pcp">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">PCP</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=prep">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Preparação</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=qua">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Qualidade</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=corte">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Corte</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=sg">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Serv. Gerais</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=adm">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Administrativo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=desen">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Desenvolvimento</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=bor">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Bordado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=almox">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Almoxarifado</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=est">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Estilo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=sub">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Sublimação</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=man">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Manutenção</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=infor">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Informática</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=dp">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">D.Pessoal</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php?acaoadmin=fin">
                                        <span class="pcoded-micon"><i class="fa fa-cog"></i></span>
                                        <span class="pcoded-mtext">Financeiro</span>
                                    </a>
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
