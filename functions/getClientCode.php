<div class="card" aria-hidden="true">
    <div class="card-body">
        <p class="card-text">
            <span class="col-1">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Código do cliente</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="clientCode">
              </div>
            </span>
            <span class="col-1">
                <button type="button" class="btn btn-success" onclick="getClientCode();">Pronto</button>
            </span>
        </p>
    </div>
</div>

<script>
  function getClientCode() {
    const clientCode = document.getElementById('clientCode').value;
    fetch('http://localhost/ocave/backend/getClientCode.php?codigo=${clientCode}')
    .then(response => response.json())
    .then(data => {
      const { nome, cidade, telefone, dataUltimaCompra, valorCompradoTotal } = data;

      document.getElementById('businessName').textContent = nome;
      document.getElementById('cityName').textContent = cidade;
      document.getElementById('phoneNumber').textContent = telefone;
      document.getElementById('lastBought').textContent = dataUltimaCompra;
      document.getElementById('totalBoughtValue').textContent = valorTotalComprado;
    }).catch(error => {
      console.error('Ocorreu um erro: ', error);
    });
  }
</script>