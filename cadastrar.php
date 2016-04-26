<?php
include "conecta_mysql.inc";


$user     =$_POST["nome"    ];
$telefone    =$_POST["telefone"   ];


if($user!="" && $telefone!="")
{
	
	mysql_query("INSERT INTO cadastro(nm_cadastro,tel_cadastro) VALUES('$user','$telefone')");
}

?>
