<?php
include_once('conexao/conect.php');
ob_start(); //Armazena no cache
session_start(); //Inicia a sessão
if (isset($_SESSION['email']) && (isset($_SESSION['senha']))) {
  header("Location: home.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
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
    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\icofont\css\icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
</head>

<body class="fix-menu">


    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                        <form class="md-float-material form-material" method="post" action="">
                            <div class="text-center">

                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Login</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" required="" placeholder="Seu e-mail">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="senha" class="form-control" required="" placeholder="Sua senha">
                                        <span class="form-bar"></span>
                                    </div>
                                    <!--<div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Lembrar de mim</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="#" class="text-right f-w-600"> Esqueci minha senha</a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" name="logar" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Entrar</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Obrigado!</p>
                                            <p class="text-inverse text-left"><a href="../"><b class="f-w-600">Voltar para o site</b></a></p>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                  include_once('conexao/conect.php');
                                  if (isset($_GET['acao'])) {
                                    if (!isset($_POST['logar'])){
                                      $acao = $_GET['acao'];
                                      if ($acao == 'negado') {
                                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Erro ao Acessar o sistema!</strong> Efetue o login ;(</div>';
                                      }
                                    }
                                }
                                  if (isset($_POST['logar'])){
                                    $login = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
                                    $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
                                    $select = "SELECT * FROM tb_user1 WHERE email=:emailLogin AND senha=:senhaLogin";

                                    try {
                                      $resultLogin = $con->prepare($select);
                                      $resultLogin->bindParam(':emailLogin',$login, PDO::PARAM_STR);
                                      $resultLogin->bindParam(':senhaLogin',$senha, PDO::PARAM_STR);
                                      $resultLogin->execute();

                                      $verificar = $resultLogin->rowCount();
                                      if ($verificar > 0) {
                                        $login = $_POST['email'];
                                        $senha = $_POST['senha'];
                                        //CRIANDO A SESSÃO DE LOGIN E SENHA
                                        $_SESSION['email'] = $login;
                                        $_SESSION['senha'] = $senha;

                                        echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Logado com sucesso!</strong> Redirecionando para o sistema :)</div>';
                                        header("Refresh: 1, home.php");
                                      }else{
                                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Erro!</strong> login ou senha incorretos, digite outro login ou consulte o administrador :(</div>';
                                      }
                                    } catch (PDOException $e){
                                      echo "ERRO DE LOGIN DO PDO : ".$e->getMessage();
                                    }
                                  }
                                ?>
                            </div>
                        </form>

                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="files\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script type="text/javascript" src="files\assets\js\common-pages.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
