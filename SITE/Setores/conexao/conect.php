<?php
/*
**Nome do servidor(localhost)
** Nome do banco de dados (BD_agenda)
**Nome do usuario (root)
Senha do BD (qwe123)
*/
try{
	@define('host', 'localhost');
	@define('DB', 'adminbemt');
	@define('user', 'jmf');
	@define('pass', 'qwe123');

$con = new PDO('mysql:host='.host.';dbname='.DB,user,pass);
$con -> setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo "<b>ERRO = </b>".$e -> getMessage();

}
