<?php
//includes do topo
include_once("includes/topo.php");

//includes das paginas
if (isset($_GET['acaoadmin'])) {
  $acao = $_GET['acaoadmin'];

  if($acao == 'perfil'){
     include_once("paginas/perfil.php");
   }elseif ($acao == 'attperfil') {
     include_once("paginas/upgrades/att_perfil.php");
   }elseif ($acao == 'caduser') {
     include_once("paginas/cad_user.php");
   }elseif ($acao == 'attuser') {
     include_once("paginas/upgrades/att_user.php");
   }elseif ($acao == 'cadslide') {
     include_once("paginas/cad_slide.php");
   }elseif ($acao == 'attslide') {
     include_once("paginas/upgrades/att_slide.php");
   }elseif ($acao == 'cadsobre') {
     include_once("paginas/cad_sobre.php");
   }elseif ($acao == 'attsobre') {
     include_once("paginas/upgrades/att_sobre.php");
   }elseif ($acao == 'galeria') {
    include_once("paginas/cad_galeria.php");
  }elseif ($acao == 'cadval') {
     include_once("paginas/cad_valores.php");
   }elseif ($acao == 'attval') {
     include_once("paginas/upgrades/att_val.php");
   }elseif ($acao == 'cadapresCtt') {
     include_once("paginas/cad_apresCtt.php");
   }elseif ($acao == 'cadcoment') {
     include_once("paginas/cad_coment.php");
   }elseif ($acao == 'cadctt') {
     include_once("paginas/cad_ctt.php");
   }elseif ($acao == 'cadadm') {
     include_once("paginas/cad_adm.php");
   }elseif ($acao == 'attadm') {
     include_once("paginas/upgrades/att_adm.php");
   }elseif ($acao == 'cadalmox') {
     include_once("paginas/cad_almox.php");
   }elseif ($acao == 'attalmox') {
     include_once("paginas/upgrades/att_almox.php");
   }elseif ($acao == 'caddesen') {
     include_once("paginas/cad_desen.php");
   }elseif ($acao == 'attdesen') {
     include_once("paginas/upgrades/att_desen.php");
   }elseif ($acao == 'cadengP') {
     include_once("paginas/cad_engP.php");
   }elseif ($acao == 'attengP') {
     include_once("paginas/upgrades/att_engP.php");
   }elseif ($acao == 'cadgeren') {
     include_once("paginas/cad_geren.php");
   }elseif ($acao == 'attgeren') {
     include_once("paginas/upgrades/att_geren.php");
   }elseif ($acao == 'cadpcp') {
     include_once("paginas/cad_pcp.php");
   }elseif ($acao == 'attpcp') {
     include_once("paginas/upgrades/att_pcp.php");
   }elseif ($acao == 'cadti') {
     include_once("paginas/cad_ti.php");
   }elseif ($acao == 'attti') {
     include_once("paginas/upgrades/att_ti.php");
   }elseif ($acao == 'cadmod1') {
     include_once("paginas/cad_mod1.php");
   }elseif ($acao == 'attmod1') {
     include_once("paginas/upgrades/att_mod1.php");
   }elseif ($acao == 'cadmod2') {
     include_once("paginas/cad_mod2.php");
   }elseif ($acao == 'attmod2') {
     include_once("paginas/upgrades/att_mod2.php");
   }elseif ($acao == 'cadmod3') {
     include_once("paginas/cad_mod3.php");
   }elseif ($acao == 'attmod3') {
     include_once("paginas/upgrades/att_mod3.php");
   }elseif ($acao == 'manual') {
    include_once("paginas/manual.php");
   }elseif ($acao == 'mecanico') {
    include_once("paginas/mecanico.php");
   }elseif ($acao == 'attmec') {
    include_once("paginas/upgrades/att_mec.php");
   }elseif ($acao == 'reqmat') {
    include_once("paginas/cad_reqMateriais.php");
   }elseif ($acao == 'attreqmat') {
    include_once("paginas/upgrades/att_reqMateriais.php");
   }elseif ($acao == 'reqIO') {
    include_once("paginas/entrada_saida.php");
   }elseif ($acao == 'attreqIO') {
    include_once("paginas/upgrades/att_saida.php");
   }elseif ($acao == 'req') {
    include_once("paginas/requisicao.php");
   }elseif ($acao == 'attreq') {
    include_once("paginas/upgrades/att_requisicao.php");
   }elseif ($acao == 'fichaT') {
    include_once("paginas/fichaT.php");
   }elseif ($acao == 'attfichaT') {
    include_once("paginas/upgrades/att_fichaT.php");
   }elseif ($acao == 'troca') {
    include_once("paginas/troca.php");
   }elseif ($acao == 'fichaC') {
    include_once("paginas/ficha.php");
   }else {
     include_once("paginas/indextest.php");
   }
}else {
  include_once("paginas/indextest.php");
}

//includes do rodape  
include_once("includes/rodape.php");
