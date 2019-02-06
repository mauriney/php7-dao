<?php 

require_once("config.php");

//Carrega 1 usuaário
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/


//Carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($getLista);*/


//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("jo");
echo json_encode($search)*/



//Carregar um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("root", "123456");

echo ($usuario);
 ?>