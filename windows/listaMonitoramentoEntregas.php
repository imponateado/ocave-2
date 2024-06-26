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
        Rota: <select aria-label="Default select example" id="rotas">
                <option value="noValue"></option>
              </select>
        Cod. Cliente: <input type="text" name="cliente" id="cliente" placeholder="Digite código do cliente">
        <button type="button" class="btn btn-primary" onclick="triggerFilter()">Pronto</button>
      </div>
      <div id="filteredContent"><div class="loader"></div></div>
    </div>
  </div>

  <?php require '../functions/scripts.php'; ?>
  <script>
      let baseUrl = window.location.protocol + '//' + window.location.hostname;
      if (window.location.port) {
        baseUrl += ':' + window.location.port;
      }

    function triggerFilter() {
      const startDate = document.getElementById('startDate').value;
      const endDate = document.getElementById('endDate').value;
      const rota = document.getElementById('rotas').value;
      const cliente = document.getElementById('cliente').value;

      let url = `${baseUrl}/ocave/backend/getFilteredDeliveredClientList.php?startDate=${startDate}&endDate=${endDate}&rota=${rota}&cliente=${cliente}`;
      fetch(url)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          let tabela = '<table class="table">';
          tabela += ' <thead class = "thead-dark"><tr><th>OC</th><th>Cod</th><th>Rota</th><th>Nome</th><th>Telefone</th><th>semContato</th><th>Questionario De Entregas</th><th>Cliente insatisfeito</th><th>Observacao</th><th>data</th></tr></thead><tbody>';
          Object.values(data).forEach(item => {
            tabela += `<tr>
            <td>${item.ordemCarregamento}</td>
              <td>${item.IDCLIENTE}</td>
              <td>${item.CODINTERNO}</td>
              <td>${item.nomeContato}</td>
              <td>${item.TEL_CONT}</td>
              <td>${item.semContato}</td>
              <td>${item.questionarioEntregas}</td>
              <td>${item.alerta}</td>
              <td>${item.observacao}</td>
              <td>${item.data}</td>
            </tr>`;
          });
          tabela += '</tbody></table>';
          document.getElementById('filteredContent').innerHTML = tabela;
        })
    }

    window.onload = function () {

      triggerFilter();
      
      var url = `${baseUrl}/ocave/backend/getRotaList.php`;
      fetch(url)
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
        let options = '';
        data.forEach(item => {
          options += `<option value="${item.IDROTA}">${item.CODINTERNO} - ${item.DESCRICAO} - ${item.IDROTA}</option>`;
          document.getElementById('rotas').innerHTML = options;
        })
      })

    }
  </script>
</body>
</html>

<style>
  .loader {
  width: 120px;
  height: 20px;
  background: 
    linear-gradient(90deg,#0001 33%,#0005 50%,#0001 66%)
    #f2f2f2;
  background-size:300% 100%;
  animation: l1 1s infinite linear;
}
@keyframes l1 {
  0% {background-position: right}
}
</style>
