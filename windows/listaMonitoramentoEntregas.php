<!doctype html>
<html lang="pt-br">
<?php require '../functions/head.php'; ?>

<body>
  <div class="wrapper d-flex align-items-stretch">
    <?php require '../functions/navbar.php'; ?>
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <div class="filterItself">
        Data inicial: <input type="date" id="startDate">
        Data final: <input type="date" id="endDate">
        <button type="button" class="btn btn-primary" onclick="triggerFilter()">Pronto</button>
      </div>
      <div id="filteredContent">waitin' for filter</div>
    </div>
  </div>

  <?php require '../functions/scripts.php'; ?>
  <script>
    function triggerFilter() {
      const startDate = document.getElementById('startDate').value;
      const endDate = document.getElementById('endDate').value;

      let baseUrl = window.location.protocol + '//' + window.location.hostname;
      if (window.location.port) {
        baseUrl += ':' + window.location.port;
      }

      let url = `${baseUrl}/ocave/backend/getFilteredDeliveredClientList.php?startDate=${startDate}&endDate=${endDate}`;
      fetch(url)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          let tabela = '<table class="table">';
          tabela += ' <thead class = "thead-dark"><tr><th>OC</th><th>nomeContato</th><th>telefoneContato</th><th>semContato</th><th>questionarioEntregas</th><th>avaliacaoEmpresa</th><th>Cliente insatisfeito</th><th>observacao</th><th>produtoGostariaEntregasse</th><th>data</th></tr></thead><tbody>';
          data.forEach(item => {
            tabela += `<tr>
              <td>${item.ordemCarregamento}</td>
              <td>${item.nomeContato}</td>
              <td>${item.telefoneContato}</td>
              <td>${item.semContato}</td>
              <td>${item.questionarioEntregas}</td>
              <td>${item.avaliacaoEmpresa}</td>
              <td>${item.alerta}</td>
              <td>${item.observacao}</td>
              <td>${item.produtoGostariaEntregasse}</td>
              <td>${item.data}</td>
              </tr>`;
          });
          tabela += '</tbody></table>';
          document.getElementById('filteredContent').innerHTML = tabela;
        })
    }

    window.onload = function () {

      let baseUrl = window.location.protocol + '//' + window.location.hostname;
      if (window.location.port) {
        baseUrl += ':' + window.location.port;
      }

      let url = `${baseUrl}/ocave/backend/getFilteredDeliveredClientList.php`;
      fetch(url)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          let tabela = '<table class="table">';
          tabela += ' <thead class = "thead-dark"><tr><th>OC</th><th>nomeContato</th><th>telefoneContato</th><th>semContato</th><th>questionarioEntregas</th><th>avaliacaoEmpresa</th><th>Cliente insatisfeito</th><th>observacao</th><th>produtoGostariaEntregasse</th><th>data</th></tr></thead><tbody>';
          data.forEach(item => {
            tabela += `<tr>
              <td>${item.ordemCarregamento}</td>
              <td>${item.nomeContato}</td>
              <td>${item.telefoneContato}</td>
              <td>${item.semContato}</td>
              <td>${item.questionarioEntregas}</td>
              <td>${item.avaliacaoEmpresa}</td>
              <td>${item.alerta}</td>
              <td>${item.observacao}</td>
              <td>${item.produtoGostariaEntregasse}</td>
              <td>${item.data}</td>
              </tr>`;
          });
          tabela += '</tbody></table>';
          document.getElementById('filteredContent').innerHTML = tabela;
        })
    }
  </script>
</body>

</html>