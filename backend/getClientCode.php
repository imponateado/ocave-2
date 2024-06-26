<?php
    require '../functions/makeSqlConnectionToWG.php';

    $codigo = $_GET["codigo"];
    $sql = "select * from cliente where ID_CLI = '$codigo'";
    $result = $WGConn->query($sql);
    $WGConn->close();

    if($result) {
        $row = $result->fetch_assoc();

        $nome = $row["nome"] ? $row["nome"] : "Esse cliente nao tem nome";
        $cidade = $row["CIDADE"] ? $row["CIDADE"] : "Esse cliente nao tem cidade";
        $telefone = $row["TEL_CONT"] ? $row["TEL_CONT"] : "Este cliente nao tem telefone";
        $dataUltimaCompra = $row["DT_ULT_COMPRA"] ? $row["DT_ULT_COMPRA"] : "Este cliente nao comprou nada";
        $valorCompradoTotal = $row["TOTALCOMPRADO"] ? $row["TOTALCOMPRADO"] : "Este cliente nao comprou nada";
        $diasDesdeUltimaCompra = (
            function($dtUltCompra) {
                $lastPurchaseDate = new DateTime($dtUltCompra);
                $currentDate = new DateTime(date('Y-m-d H:i:s'));
                $interval = $lastPurchaseDate->diff($currentDate);
                $daysSinceLastPurchase = $interval->format('%a');
                return $daysSinceLastPurchase;
            }
        )($row['DT_ULT_COMPRA']);
    
        $data = array(
            "nome" => $nome,
            "cidade" => $cidade,
            "telefone" => $telefone,
            "dataUltimaCompra" => $dataUltimaCompra,
            "valorCompradoTotal" => $valorCompradoTotal,
            "diasDesdeUltimaCompra" => $diasDesdeUltimaCompra
        );

        $json_data = json_encode($data);

        header('Content-Type: application/json');

        echo $json_data;
    } else {
        echo json_encode(["error" => "Query failed"]);
    }
?>