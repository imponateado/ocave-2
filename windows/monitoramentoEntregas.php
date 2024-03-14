<!doctype html>
<html lang="en">
<?php require '../functions/head.php'; ?>

<body>
	<div class="wrapper d-flex align-items-stretch">
		<?php require '../functions/navbar.php'; ?>
		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
      <?php require '../functions/getClientCode.php' ?>
      <?php require '../functions/getClientData.php' ?>
    
    <div class="card" aria-hidden="true">
      <div class="card-body">
        <p class="card-text">
          <span class="col-1">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Número da liberação</span>
              </div>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="numeroLiberacao">
            </div>
          </span>
          <span class="col-1">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nome do contato</span>
              </div>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nomeContato">
            </div>
          </span>
          <span class="col-1">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Telefone do contato</span>
              </div>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="telefoneContato">
            </div>
          </span>
          <span class="col-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="pedidoOK">
            <label class="form-check-label" for="pedidoOK">
              Pedido OK
            </label>
          </div>
          </span>

          <?php require '../functions/listaReclamacaoSetorizado.php' ?>

          <span class="col-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="alerta">
                <label class="form-check-label btn btn-danger" for="alerta">
                  Alerta
                </label>
              </div>
          </span>
          <span class="col-1">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Observação</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="observacao">
              </div>
          </span>
          <span class="col-1">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Produto que gostaria que entregassemos</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="produtoGostariaEntregasse">
              </div>
          </span>
          <span class="col-1">
            <button type="button" class="btn btn-success" onclick="insertData();">Gravar</button>
            <span class="col-1" id="getStatus"></span>
          </span>
        </p>
      </div>
    </div>
	</div>

  <script>
    function insertData() {
      const numeroLiberacao = document.getElementById('numeroLiberacao').value;
      const nomeContato = document.getElementById('nomeContato').value;
      const telefoneContato = document.getElementById('telefoneContato').value;
      const pedidoOK = document.getElementById('pedidoOK').value;

      const questionario = document.getElementsByName('questionario').value;

      const avaliacaoEmpresa = document.getElementById('avaliacaoEmpresa').value;
      const alerta = document.getElementById('alerta').value;
      const observacao = document.getElementById('observacao').value;
      const produtoGostariaEntregasse = document.getElementById('produtoGostariaEntregasse').value;

      if(numeroLiberacao === "" && nomeContato === "" && avaliacaoEmpresa === ""){
        alert("Algum dos campos, número da liberação, ou nome do contato, ou avaliação da empresa está (estão) faltando.");
        return;
      }

      let url = `${window.location.href}../backend/insertDataDB.php?numeroLiberacao=${numeroLiberacao}&nomeContato=${nomeContato}&telefoneContato=${telefoneContato}&pedidoOK=${pedidoOK}&questionario=${questionario}&avaliacaoEmpresa=${avaliacaoEmpresa}&alerta=${alerta}&observacao=${observacao}&produtoGostariaEntregasse=${produtoGostariaEntregasse}`;

      fetch(url)
      .then(response => {
        document.getElementById('getStatus').textContent = document.getElementById('insertStatus').value;
      })
      .catch(function() {
        console.log("Fetch error :-S", err);
      })
    }
  </script>

	<?php require '../functions/scripts.php';	?>
</body>

</html>