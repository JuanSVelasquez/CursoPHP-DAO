<?php 
require_once("config.php");
//carrega um usuario
//$juan=new Usuario();
//$juan->loadById(4);
//echo $juan."<br>";
//echo "============================================================<br>";

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//busca um usuario pelo login
//$search = Usuario::search("j");
//echo json_encode($search);

//carrega um usuario usando login e senha
//$usuario= new Usuario();
//$usuario->login("juan","212312");
//echo $usuario

//cadastrar usuario
//$aluno = new Usuario();
//$aluno->insert('louise','sadk21');/
//$var_dum($aluno);

//editar um usuario e senha
$usuario=new Usuario;
$usuario->loadById(4);
$usuario->update('alberto','12g3gj1h2');
echo $usuario;
?>