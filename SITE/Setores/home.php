
<?php
//includes do topo
include_once("includes/topo.php");

//includes das paginas
if (isset($_GET['acaoadmin'])) {
  $acao = $_GET['acaoadmin'];

  if($acao == 'indus'){
     include_once("paginas/Indus.php");
   }elseif ($acao == 'cos1') {
     include_once("paginas/cos1.php");
   }elseif ($acao == 'cos3') {
    include_once("paginas/cos3.php");
  }elseif ($acao == 'cos4') {
    include_once("paginas/cos4.php");
  }elseif ($acao == 'aca') {
    include_once("paginas/aca.php");
  }elseif ($acao == 'ep') {
    include_once("paginas/ep.php");
  }elseif ($acao == 'pcp') {
    include_once("paginas/pcp.php");
  }elseif ($acao == 'prep') {
    include_once("paginas/prep.php");
  }elseif ($acao == 'qua') {
    include_once("paginas/qua.php");
  }elseif ($acao == 'corte') {
    include_once("paginas/corte.php");
  }elseif ($acao == 'sg') {
    include_once("paginas/sg.php");
  }elseif ($acao == 'adm') {
    include_once("paginas/adm.php");
  }elseif ($acao == 'desen') {
    include_once("paginas/desen.php");
  }elseif ($acao == 'bor') {
    include_once("paginas/bor.php");
  }elseif ($acao == 'almox') {
    include_once("paginas/almox.php");
  }elseif ($acao == 'est') {
    include_once("paginas/est.php");
  }elseif ($acao == 'sub') {
    include_once("paginas/sub.php");
  }elseif ($acao == 'man') {
    include_once("paginas/man.php");
  }elseif ($acao == 'infor') {
    include_once("paginas/infor.php");
  }elseif ($acao == 'dp') {
    include_once("paginas/dp.php");
  }elseif ($acao == 'fin') {
    include_once("paginas/fin.php");
  }else {
     include_once("paginas/indexS.php");
   }
}else {
  include_once("paginas/indexS.php");
}

//includes do rodape  
include_once("includes/rodape.php");
