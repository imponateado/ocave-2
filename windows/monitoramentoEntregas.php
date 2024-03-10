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
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
          </span>
          <span class="col-1">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nome do contato</span>
              </div>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
          </span>
          <span class="col-1">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Telefone do contato</span>
              </div>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
          </span>
          <span class="col-1">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Pedido OK
            </label>
          </div>
          </span>

          <?php require '../functions/listaReclamacaoSetorizado.php' ?>

          <span class="col-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label btn btn-danger" for="flexCheckDefault">
                  Alerta
                </label>
              </div>
          </span>
          <span class="col-1">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Observação</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
              </div>
          </span>
          <span class="col-1">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Produto que gostaria que entregassemos</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
              </div>
          </span>
          <span class="col-1">
            <button type="button" class="btn btn-success">Gravar</button>
          </span>
        </p>
      </div>
    </div>
	</div>

	<?php require '../functions/scripts.php';	?>
</body>

</html>