<?php
include('../../conexao/conect.php');

if (isset($_GET['idComent']) && isset($_POST['check'])){
	$id = $_GET['idComent'];
  $nivel = 1;
  $update = "UPDATE tb_galeria SET nivel=:nivel WHERE id =:id";
  try{
		$result = $con->prepare($update);
		$result->bindValue(':id',$id,PDO::PARAM_INT);
    $result ->bindValue(':nivel',$nivel,PDO::PARAM_STR);
		$result->execute();

		$contar=$result->rowCount();
		if ($contar>0) {
			header("Location: ../../home.php?acaoadmin=galeria");
		}else{
			header("Location: ../../home.php?acaoadmin=cadcoment");
		}
	}catch(PDOException $e){
		echo "<b>ERRO DE DELETE: </b>".$e->getMessage();
	}
}
