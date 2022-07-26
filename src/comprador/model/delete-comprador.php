<?php

include("../../conexao/conn.php");

$ID = $_REQUEST['ID'];

$sql = "DELETE FROM COMPRADOR WHERE ID = $ID";

$resultado = $pdo->query($sql);

if($resultado){
    $dados = array(
        'comprador' => 'success',
        'mensagem' => 'Registo excluido com sucesso!'
    );
} else {
    $dados = array(
        'comprador' => 'error',
        'mensagem' => 'Não foi possivel excluir o registro'
    );
}

echo json_encode($dados);