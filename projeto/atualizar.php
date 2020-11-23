<?php
require_once 'conecta.php';
$id = $_POST["id"];
$cpf = $_POST["CPF"];
$status    = $_POST["status"];

echo("$id, $cpf, $status");

try {

  $stmt = $pdo->prepare('UPDATE projeto SET id = :id, cpf = :cpf, status = :status WHERE id = :id');
  $stmt->execute(array(
  	':id'   => $id,
    ':cpf'       => $cpf,
    ':status'    => $status,
  ));
  echo("<script>alert('Dados atualizados com sucesso.');window.location.assign('2busca.php');</script>");
  //echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>