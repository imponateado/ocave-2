<?php
    $numeroliberacao = $_GET['liberacao'];
    $nomeContato = $_GET['nomeContato'];
    $telefoneContato = $_GET['telefoneContato'];
    $pedidoOK = $_GET['pedidoOK'];
    $questionarioEntregas = $_GET['questionarioEntregas'];

    $avaliacaoEmpresa = $_GET['avaliacaoEmpresa'];

    $alerta = $_GET['alerta'];

    $observacao = $_GET['observacao'];
    $produtoGostariaEntregasse = $_GET['produtoGostariaEntregasse'];

    require '../functions/makeSqlConnectionToOwn.php';

    $sql = "INSERT INTO historicoEntregas (numeroLiberacao, nomeContato, telefoneContato, pedidoOK, questionarioEntregas, avaliacaoEmpresa, alerta, observacao, produtoGostariaEntregasse) VALUES ('$numeroliberacao', '$nomeContato', '$telefoneContato', '$pedidoOK', '$questionarioEntregas', '$avaliacaoEmpresa', '$alerta', '$observacao', '$produtoGostariaEntregasse')";

    if($conn->query($sql) === TRUE) {
        echo "<span id='insertStatus'>Registrado com sucesso</span>";
    } else {
        echo "<span id='insertStatus'>Erro ao inserir registro:" . $conn->error . "</span>";
    }
    $conn->close();
?>