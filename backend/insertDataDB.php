<?php
    $ordemCarregamento = $_GET['ordemCarregamento'];
    $nomeContato = $_GET['nomeContato'];
    $telefoneContato = $_GET['telefoneContato'];
    $pedidoOK = $_GET['pedidoOK'];
    $questionarioEntregas = $_GET['questionarioEntregas'];

    $avaliacaoEmpresa = $_GET['avaliacaoEmpresa'];

    $alerta = $_GET['alerta'];

    $observacao = $_GET['observacao'];
    $produtoGostariaEntregasse = $_GET['produtoGostariaEntregasse'];

    require '../functions/makeSqlConnectionToOwn.php';

    $sql = "INSERT INTO historicoentregas (ordemCarregamento, nomeContato, telefoneContato, pedidoOK, questionarioEntregas, avaliacaoEmpresa, alerta, observacao, produtoGostariaEntregasse) VALUES ('$ordemCarregamento', '$nomeContato', '$telefoneContato', '$pedidoOK', '$questionarioEntregas', '$avaliacaoEmpresa', '$alerta', '$observacao', '$produtoGostariaEntregasse')";

    if($conn->query($sql) === TRUE) {
        echo "Registrado com sucesso.";
    } else {
        echo "Erro ao inserir registro:" . $conn->error;
    }
    $conn->close();
?>