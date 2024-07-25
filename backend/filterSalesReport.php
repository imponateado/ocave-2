<?php
function getBusinessDays($startDate, $endDate)
{
    $start = strtotime($startDate);
    $end = strtotime($endDate);
    $businessDays = 0;
    while ($start <= $end) {
        $daysOfWeek = date("w", $start);
        if ($daysOfWeek != 0 && $daysOfWeek != 6) {
            $businessDays++;
        }
        $start = strtotime("+1 day", $start);
    }
    return $businessDays;
}

function allSalesPerson()
{
    require '../functions/makeSqlConnectionToOwn.php';
    $sql = "SELECT DISTINCT TRIM(UPPER(vendedor)) AS cleaned_name FROM historicoVendas";
    $result = $OwnConn->query($sql);
    $salesPersonList = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $salesPersonList[] = $row["cleaned_name"];
        }
    } else {
        $salesPersonList[] = "Nenhum vendedor encontrado";
    }
    $OwnConn->close();
    return $salesPersonList;
}

function getSalesBySalesPerson($salesPerson)
{
    require '../functions/makeSqlConnectionToOwn.php';
    $sql = "SELECT * FROM historicoVendas WHERE TRIM(UPPER(vendedor)) = ?";
    $stmt = $OwnConn->prepare($sql);
    $stmt->bind_param("s", $salesPerson);
    $stmt->execute();
    $result = $stmt->get_result();
    $salesData = [];
    $salesCount = 0;  // Initialize sales count
    while ($row = $result->fetch_assoc()) {
        $salesData[] = $row;
        $salesCount++;  // Increment count for each row
    }
    $stmt->close();
    $OwnConn->close();
    return ['salesCount' => $salesCount, 'salesDetails' => $salesData];
}

$startDate = $_GET['$startDate'];
$endDate = $_GET['$endDate'];
$ligacoesDia = $_GET['ligacoesDia'];
$businessDays = getBusinessDays($startDate, $endDate);
$resultadoLigacoesDia = $businessDays * $ligacoesDia;
$salesPersons = allSalesPerson();
$response = [
    'diasUteis' => $businessDays,
    'ligacoesPrevistas' => $resultadoLigacoesDia,
    'vendedores' => $salesPersons,
    'vendasPorVendedor' => []
];

foreach ($salesPersons as $salesPerson) {
    $salesInfo = getSalesBySalesPerson($salesPerson);
    $response['vendasPorVendedor'][] = [
        'vendedor' => $salesPerson,
        'quantidadeVendas' => $salesInfo['salesCount'],
        'detalhesVendas' => $salesInfo['salesDetails']
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>