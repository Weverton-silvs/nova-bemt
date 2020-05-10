<?php
//DEL Slide
include('../../conexao/conect.php');
if (isset($_GET['idDelslide'])) {
	$id = $_GET['idDelslide'];
	$delete = "DELETE FROM tb_slide WHERE id_slide=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadslide");
		}else{
			header("Location: ../../home.php?acaoadmin=cadslide");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
}

//DEL Apresentação
include('../../conexao/conect.php');
if (isset($_GET['idDelaprs'])) {
	$id = $_GET['idDelaprs'];
	$delete = "DELETE FROM tb_apresentacao WHERE id_apresentacao=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadsobre");
		}else{
			header("Location: ../../home.php?acaoadmin=cadsobre");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
}

//DEL Valores
include('../../conexao/conect.php');
if (isset($_GET['idDelval'])) {
	$id = $_GET['idDelval'];
	$delete = "DELETE FROM tb_valores WHERE id_val=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadval");
		}else{
			header("Location: ../../home.php?acaoadmin=cadval");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
}

//DEL Adm
include('../../conexao/conect.php');
if (isset($_GET['idDeladm'])) {
	$id = $_GET['idDeladm'];
	$delete = "DELETE FROM tb_adm WHERE id_adm=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadadm");
		}else{
			header("Location: ../../home.php?acaoadmin=cadadm");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
}

 //DEL Almoxarifado
 include('../../conexao/conect.php');
 if (isset($_GET['idDelalmox'])) {
 	$id = $_GET['idDelalmox'];
 	$delete = "DELETE FROM tb_almox WHERE id_almox=:id";

 	try{
 		$result = $con->prepare($delete);
 		$result->bindValue(':id',$id,PDO::PARAM_INT);
 		$result->execute();

 		$contar=$result->rowCount();
 		if ($contar>0) {
 			header("Location: ../../home.php?acaoadmin=cadalmox");
 		}else{
 			header("Location: ../../home.php?acaoadmin=cadalmox");
 		}
 	}catch(PDOException $e){
 		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
 	}
 }

 //DEL Desenvolvimento
 include('../../conexao/conect.php');
 if (isset($_GET['idDeldesen'])) {
  $id = $_GET['idDeldesen'];
  $delete = "DELETE FROM tb_desen WHERE id_desen=:id";

  try{
 	 $result = $con->prepare($delete);
 	 $result->bindValue(':id',$id,PDO::PARAM_INT);
 	 $result->execute();

 	 $contar=$result->rowCount();
 	 if ($contar>0) {
 		 header("Location: ../../home.php?acaoadmin=caddesen");
 	 }else{
 		 header("Location: ../../home.php?acaoadmin=caddesen");
 	 }
  }catch(PDOException $e){
 	 echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
  }
 }

 //DEL Engenharia
 include('../../conexao/conect.php');
 if (isset($_GET['idDelengP'])) {
  $id = $_GET['idDelengP'];
  $delete = "DELETE FROM tb_eng WHERE id_eng=:id";

  try{
 	 $result = $con->prepare($delete);
 	 $result->bindValue(':id',$id,PDO::PARAM_INT);
 	 $result->execute();

 	 $contar=$result->rowCount();
 	 if ($contar>0) {
 		 header("Location: ../../home.php?acaoadmin=cadengP");
 	 }else{
 		 header("Location: ../../home.php?acaoadmin=cadengP");
 	 }
  }catch(PDOException $e){
 	 echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
  }
 }

 //DEL Gerencia
 include('../../conexao/conect.php');
 if (isset($_GET['idDelgeren'])) {
	$id = $_GET['idDelgeren'];
	$delete = "DELETE FROM tb_geren WHERE id_geren=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadgeren");
		}else{
			header("Location: ../../home.php?acaoadmin=cadgeren");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
 }

 //DEL PCP
 include('../../conexao/conect.php');
 if (isset($_GET['idDelpcp'])) {
	$id = $_GET['idDelpcp'];
	$delete = "DELETE FROM tb_pcp WHERE id_pcp=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadpcp");
		}else{
			header("Location: ../../home.php?acaoadmin=cadpcp");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
 }

 //DEL TI
 include('../../conexao/conect.php');
 if (isset($_GET['idDelti'])) {
	$id = $_GET['idDelti'];
	$delete = "DELETE FROM tb_ti WHERE id_ti=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadti");
		}else{
			header("Location: ../../home.php?acaoadmin=cadti");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
 }

 //DEL MOD1
 include('../../conexao/conect.php');
 if (isset($_GET['idDelmod1'])) {
	$id = $_GET['idDelmod1'];
	$delete = "DELETE FROM tb_mod1 WHERE id_mod1=:id";

	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=cadmod1");
		}else{
			header("Location: ../../home.php?acaoadmin=cadmod1");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
 }

 //DEL MOD2
 include('../../conexao/conect.php');
 if (isset($_GET['idDelmod2'])) {
 $id = $_GET['idDelmod2'];
 $delete = "DELETE FROM tb_mod2 WHERE id_mod2=:id";

 try{
	 $result = $con->prepare($delete);
	 $result->bindValue(':id',$id,PDO::PARAM_INT);
	 $result->execute();

	 $contar=$result->rowCount();
	 if ($contar>0) {
		 header("Location: ../../home.php?acaoadmin=cadmod2");
	 }else{
		 header("Location: ../../home.php?acaoadmin=cadmod2");
	 }
 }catch(PDOException $e){
	 echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
 }
 }

 //DEL MOD3
 include('../../conexao/conect.php');
 if (isset($_GET['idDelmod3'])) {
 $id = $_GET['idDelmod3'];
 $delete = "DELETE FROM tb_mod3 WHERE id_mod3=:id";

 try{
	 $result = $con->prepare($delete);
	 $result->bindValue(':id',$id,PDO::PARAM_INT);
	 $result->execute();

	 $contar=$result->rowCount();
	 if ($contar>0) {
		 header("Location: ../../home.php?acaoadmin=cadmod3");
	 }else{
		 header("Location: ../../home.php?acaoadmin=cadmod3");
	 }
 }catch(PDOException $e){
	 echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
 }
 }

 //DEL Desenvolvimento
 include('../../conexao/conect.php');
 if (isset($_GET['idDeldesen'])) {
 $id = $_GET['idDeldesen'];
 $delete = "DELETE FROM tb_desen WHERE id_desen=:id";

 try{
	 $result = $con->prepare($delete);
	 $result->bindValue(':id',$id,PDO::PARAM_INT);
	 $result->execute();

	 $contar=$result->rowCount();
	 if ($contar>0) {
		 header("Location: ../../home.php?acaoadmin=caddesen");
	 }else{
		 header("Location: ../../home.php?acaoadmin=caddesen");
	 }
 }catch(PDOException $e){
	 echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
 }
 }

 //DEL Usuários(Perfil)
 include('../../conexao/conect.php');
 if (isset($_GET['idDelperfil'])) {
 $id = $_GET['idDelperfil'];
 $delete = "DELETE FROM tb_user1 WHERE id_user1=:id";

 try{
	 $result = $con->prepare($delete);
	 $result->bindValue(':id',$id,PDO::PARAM_INT);
	 $result->execute();

	 $contar=$result->rowCount();
	 if ($contar>0) {
		 header("Location: ../../home.php?acaoadmin=perfil");
	 }else{
		 header("Location: ../../home.php?acaoadmin=perfil");
	 }
 }catch(PDOException $e){
	 echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
 }
 }

  //DEL Usuários(CadUser)
  include('../../conexao/conect.php');
  if (isset($_GET['idDeluser'])) {
  $id = $_GET['idDeluser'];
  $delete = "DELETE FROM tb_user1 WHERE id_user1=:id";
 
  try{
	  $result = $con->prepare($delete);
	  $result->bindValue(':id',$id,PDO::PARAM_INT);
	  $result->execute();
 
	  $contar=$result->rowCount();
	  if ($contar>0) {
		  header("Location: ../../home.php?acaoadmin=caduser");
	  }else{
		  header("Location: ../../home.php?acaoadmin=caduser");
	  }
  }catch(PDOException $e){
	  echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
  }
  }

    //DEL Usuários(Dashboard)
	include('../../conexao/conect.php');
	if (isset($_GET['idDelhome'])) {
	$id = $_GET['idDelhome'];
	$delete = "DELETE FROM tb_user1 WHERE id_user1=:id";
   
	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();
   
		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php");
		}else{
			header("Location: ../../home.php");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
	}

	//DEL Mecanico
	include('../../conexao/conect.php');
	if (isset($_GET['idDelmec'])) {
	$id = $_GET['idDelmec'];
	$delete = "DELETE FROM tb_mecanico WHERE id=:id";
		
	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();
		
		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=mecanico");
		}else{
			header("Location: ../../home.php?acaoadmin=mecanico");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
	}

	//DEL Requisição de Materiais
	include('../../conexao/conect.php');
	if (isset($_GET['idDelreqM'])) {
	$id = $_GET['idDelreqM'];
	$delete = "DELETE FROM tb_reqMat WHERE id=:id";
		
	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();
		
		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=reqmat");
		}else{
			header("Location: ../../home.php?acaoadmin=reqmat");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
	}

	//DEL Requisição de Materiais
	include('../../conexao/conect.php');
	if (isset($_GET['idDelsaida'])) {
	$id = $_GET['idDelsaida'];
	$delete = "DELETE FROM tb_saida WHERE id_saida=:id";
		
	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();
		
		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=reqIO");
		}else{
			header("Location: ../../home.php?acaoadmin=reqIO");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
	}

	//DEL Requisição 
	include('../../conexao/conect.php');
	if (isset($_GET['idDelreq'])) {
	$id = $_GET['idDelreq'];
	$delete = "DELETE FROM requisicao WHERE id_requisicao=:id";
		
	try{
		$result = $con->prepare($delete);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
		$result->execute();
		
		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=req");
		}else{
			header("Location: ../../home.php?acaoadmin=req");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
	}

		//DEL FichaT 
		include('../../conexao/conect.php');
		if (isset($_GET['idft'])) {
		$id = $_GET['idft'];
		$delete = "DELETE FROM tb_fichaT WHERE id=:id";
			
		try{
			$result = $con->prepare($delete);
			$result->bindValue(':id',$id,PDO::PARAM_INT);
			$result->execute();
			
			$contar=$result->rowCount();
			if ($contar>0) {
				header("Location: ../../home.php?acaoadmin=fichaT");
			}else{
				header("Location: ../../home.php?acaoadmin=fichaT");
			}
		}catch(PDOException $e){
			echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
		}
		}