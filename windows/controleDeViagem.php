<!doctype html>
<html lang="pt-br">
    <?php require '../functions/head.php'; ?>

    <body>
        <div class="wrapper d-flex align-items-stretch">
            <?php require '../functions/navbar.php'; ?>
            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
				<div class="card">
					<div class="card-body"> <!-- card body -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Distribuidora</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="distribuidora" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="clienteNovo">
							<label class="form-check-label" for="clienteNovo">
								Cliente Novo
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="ohOhOh">
							<label class="form-check-label" for="ohOhOh">
								R$0,00
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="inativo">
							<label class="form-check-label" for="inativo">
								Inativo
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="empresaFechou">
							<label class="form-check-label" for="empresaFechou">
								Empresa Fechou
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="enderecoNaoLocalizado">
							<label class="form-check-label" for="enderecoNaoLocalizado">
								Endereço Não Localizado
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="telefoneNaoAtende">
							<label class="form-check-label" for="telefoneNaoAtende">
								Telefone Não Atende
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Código do cliente</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="codigoCliente" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Vendedor</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="vendedor" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Cidade</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="cidade" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Rota</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="rota" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Localização Geográfica</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="localizacaoGeografica" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Nome Fantasia</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="nomeFantasia" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Telefone Empresa</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="telefoneEmpresa" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">CPF/CNPJ</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="cpfCNPJ" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Nome Responsável Compra</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="nomeResponsavelCompra" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Telefone Responsável Compra</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="telefoneResponsavelCompra" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Contato Empresa</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="contatoEmpresa" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<div class="card" style="padding: 1rem 1rem 1rem;">

							<h5>Formas de pagamento</h5>

							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="" name="formaPgto">
								<label class="form-check-label" for="">
									Placeholder
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="" name="formaPgto">
								<label class="form-check-label" for="">
									Placeholder
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="" name="formaPgto">
								<label class="form-check-label" for="">
									Placeholder
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="" name="formaPgto">
								<label class="form-check-label" for="">
									Placeholder
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="" name="formaPgto">
								<label class="form-check-label" for="">
									Placeholder
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
						</div>
						<div class="card" style="padding: 1rem 1rem 1rem 1rem">

							<h5>Posse do imóvel</h5>

							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="alugado" name="posseImovel">
								<label class="form-check-label" for="alugado">
									Imóvel Alugado
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="proprio" name="posseImovel">
								<label class="form-check-label" for="proprio">
									Imóvel Próprio
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
						</div>
						<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="fotoImovel">
							<label class="form-check-label" for="fotoImovel">
								Fotos do imóvel
							</label>
						</div>
						<!-- END OF AN INPUT TYPE CHECKBOX -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Média de compra mensal</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="mediaComprasMensais" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">Fornecedores</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="fornecedores" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<div class="card" style="padding: 1rem 1rem 1rem 1rem;">
							<h5>Preços</h5>
							<!-- BEGIN OF AN INPUT TYPE TEXT -->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Placeholder</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" id="" aria-describedby="inputGroup-sizing-default">
							</div>
							<!-- END OF AN INPUT TYPE TEXT -->
							<!-- BEGIN OF AN INPUT TYPE TEXT -->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Placeholder</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" id="" aria-describedby="inputGroup-sizing-default">
							</div>
							<!-- END OF AN INPUT TYPE TEXT -->
							<!-- BEGIN OF AN INPUT TYPE TEXT -->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Placeholder</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" id="" aria-describedby="inputGroup-sizing-default">
							</div>
							<!-- END OF AN INPUT TYPE TEXT -->
							<!-- BEGIN OF AN INPUT TYPE TEXT -->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Placeholder</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" id="" aria-describedby="inputGroup-sizing-default">
							</div>
							<!-- END OF AN INPUT TYPE TEXT -->
							<!-- BEGIN OF AN INPUT TYPE TEXT -->
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Placeholder</span>
								</div>
								<input type="text" class="form-control" aria-label="Default" id="" aria-describedby="inputGroup-sizing-default">
							</div>
							<!-- END OF AN INPUT TYPE TEXT -->
						</div>
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">obsCliente</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="obsCliente" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<!-- BEGIN OF AN INPUT TYPE TEXT -->
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-default">obsRepresentante</span>
							</div>
							<input type="text" class="form-control" aria-label="Default" id="obsRepresentante" aria-describedby="inputGroup-sizing-default">
						</div>
						<!-- END OF AN INPUT TYPE TEXT -->
						<div class="card" style="padding: 1rem 1rem 1rem 1rem">
							<h5>Reportar</h5>
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="wesley" name="reportar">
								<label class="form-check-label" for="wesley">
									Wesley
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="victor" name="reportar">
								<label class="form-check-label" for="victor">
									Victor
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
							<!-- BEGIN OF AN INPUT TYPE CHECKBOX -->
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="lazinho" name="reportar">
								<label class="form-check-label" for="lazinho">
									Lazinho
								</label>
							</div>
							<!-- END OF AN INPUT TYPE CHECKBOX -->
						</div>
						<button class="btn btn-success" style="margin-top: 1rem" onclick="putFormRepresentante()">Gravar</button>
					</div> <!-- end of card body -->
				</div>
            </div>
			<!-- End page content -->
        </div>
		<script>
			function putFormRepresentante() {
				let allForms = document.querySelectorAll('.content');
				let values = {};

				allForms.forEach((form) => {
					let inputs = form.querySelectorAll('input');
					inputs.forEach((input, index) => {
						values[`input${index}`] = input.value;
					});
				});

				console.log(values);
			}
		</script>


        <?php require '../functions/scripts.php'; ?>
    </body>
</html>