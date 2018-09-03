<?php

session_start();

require_once("../libraries/formlibrary.php");


$_dados= array(
    "_nome"=>$_POST["_nome"],
    "_sobrenome"=>$_POST["_sobrenome"],
    "_cpf"=>$_POST["_cpf"],
    "_ttrabalho"=>$_POST["_ttrabalho"],
    "_filhos"=>$_POST["_filhos"],
    "_salario"=>$_POST["_salario"],
    "_email"=>$_POST["_email"],
    "_senha"=>$_POST["_senha"]

);



$_SESSION['Nome']=$_dados["_nome"];
$_SESSION['Sobrenome']=$_dados["_sobrenome"];
$_SESSION['Salario']=$_dados["_salario"];
$_SESSION['TempoDeTrabalho']=$_dados["_ttrabalho"];
$_SESSION['CPF']=$_dados["_cpf"];
$_SESSION['QuantidadeDeFilhos']=$_dados["_filhos"];
$_SESSION['Email']=$_dados['_email'];
$_SESSION['Senha']=$_dados['_senha'];




//sessao da funcao abono

$_SESSION['abono'] = _abono($_dados["_ttrabalho"]);

//sessao salario ajustado

$_SESSION['salario_ajustado'] = _ajuste($_dados["_ttrabalho"],$_dados["_filhos"],$_dados["_salario"]);

//sessao do salario familia
$_SESSION['salario_familia'] = _salariofamilia($_dados["_filhos"]);

//sessao inss
$_SESSION['inss']= _inss($_dados["_ttrabalho"],$_dados["_salario"]);

header("Location:../views/viewcupom.php");






?>