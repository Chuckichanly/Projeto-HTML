<?php
require_once 'conecta.php';
$usuario = $_POST["usuario"];
$senha   = $_POST["senha"];
echo("$usuario, $senha");
//tipos de codificação:
//base64_encode, MD5, sha1, 

try {

  $stmt = $pdo->prepare('INSERT INTO usuario VALUES(:iduser, :user, :senha)');
  $stmt->execute(array(
    ':iduser'   => Null,
    ':user' => $usuario,
    ':senha'=> $senha,
  ));
  echo("<script>alert('Registrado com sucesso.');window.location.assign('inicial.php')</script>");
  //echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>