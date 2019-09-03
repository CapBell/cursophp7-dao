<?php

require_once("config.php");

//carrega um usuario
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//carrega uma lista de usuarios

// $lista = Usuario::getList();

// echo json_encode($lista);
// $sql = new Sql();

//carrega uma lista de usuarios buscando pelo login

// $search = Usuario::search("jo");

// echo json_encode($search);

//carrega um usuario usando o login e a senha 

$usuario = new Usuario();
$usuario->login("jose", "123345432");

echo $usuario;

?>