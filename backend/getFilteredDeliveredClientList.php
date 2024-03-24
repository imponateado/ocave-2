<?php
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
    $rota = $_GET['rota'];

    $endDate = date('Y-m-d', strtotime($endDate . ' +1 day'));

    require '../functions/makeSqlConnectionToOwn.php';

    $sql = "SELECT * FROM historicoentregas WHERE `data` >= '$startDate' AND `data` < '$endDate'";
    $result = $conn->query($sql);
    $conn->close();

    $data = array();

    if($result) {
        while($row = $result->fetch_assoc()) {
            $tempData = $row; // Cria um array temporário com os dados de $row

            // Estabelece a conexão com o banco de dados WG
            require '../functions/makeSqlConnectionToWG.php';
            $ordemCarga = $row["ordemCarregamento"];
            $sqlWG = "SELECT * FROM ordem_carga WHERE IDORDEMCARGA = '$ordemCarga'";
            $resultWG = $conn->query($sqlWG);

            if($rowWG = $resultWG->fetch_assoc()) {
                $tempData["IDCLIENTE"] = $rowWG["IDCLIENTE"];
                $idRotaWG = $rowWG["IDROTA"];

                // Busca o CODINTERNO correspondente ao IDROTA na tabela rota
                $sqlRota = "SELECT CODINTERNO FROM rota WHERE IDROTA = '$idRotaWG'";
                $resultRota = $conn->query($sqlRota);
                if($rowRota = $resultRota->fetch_assoc()) {
                    $tempData["CODINTERNO"] = $rowRota["CODINTERNO"];
                }
                $conn->close();
            }
            $data[] = $tempData; // Adiciona o array temporário ao $data
        }
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'No results found.'));
    }
?>
