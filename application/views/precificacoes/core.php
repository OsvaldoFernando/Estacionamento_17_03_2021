<div class="main-wrapper main-wrapper-1">

	<!--NAVBAR-->
	<?php $this->load->view('layout/navbar'); ?>

	<!--SIDEBAR-->
	<?php $this->load->view('layout/sidebar'); ?>

	<!-- Main Content -->
	<div class="main-content">
		<section class="section">
			<div class="section-body">

				<!-- DataTable -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">

								<ol class="breadcrumb">

									<!--Trazer a página do Home-->
									<li class="breadcrumb-item">
										<a data-toggle="tooltip" title="Home" href="<?php echo base_url('/'); ?>">
											<i class="fas fa-home"></i>
										</a>
									</li>

									<!--Trazer a página anterior-->
									<li class="breadcrumb-item">
										<a data-toggle="tooltip"
										   title="Listar <?php echo $this->router->fetch_class(); ?>"
										   href="<?php echo base_url($this->router->fetch_class()); ?>">Listar
											&nbsp;<?php echo $this->router->fetch_class(); ?></a>
									</li>

									<!--Trazer a página corrente-->
									<li data-toggle="tooltip" class="breadcrumb-item active" aria-current="page">
										<?php echo $titulo; ?>
									</li>

								</ol>
							</div>

							<div class="card-body">
								<!--Título-->
								<h2> <?php echo $titulo; ?></h2><br>

								<!--Data última alteração-->
								<?php echo(isset($precificacao) ? '<i class="fas fa-calendar &nbsp; "></i>&nbsp; Data da última alteração:&nbsp; ' . formata_data_banco_com_hora($precificacao->precificacao_data_alteracao) : ''); ?>

								<!-- Formulário									-->
								<form name="form_core" method="post"><br>

									<div class="form-group row">

										<div class=" col-md-4 mb-20">
											<label>Categoria</label>
											<input type="text" class="form-control" name="precificacao_categoria"
												   value="<?php echo(isset($precificacao) ? $precificacao->precificacao_categoria : set_value('precificacao_categoria')); ?>">

											<!--Trazendo a informação de erro-->
											<?php echo form_error('precificacao_categoria', '<div class="text-danger">', '</div>'); ?>

										</div>

										<div class=" col-md-2 mb-20">
											<label>Valor hora</label>
											<input type="text" class="form-control" name="precificacao_valor_hora"
												   value="<?php echo(isset($precificacao) ? $precificacao->precificacao_valor_hora : set_value('precificacao_valor_hora')); ?>">

											<!--Trazendo a informação de erro-->
											<?php echo form_error('precificacao_valor_hora', '<div class="text-danger">', '</div>'); ?>

										</div>

										<div class=" col-md-2 mb-20">
											<label>Valor mensalidade</label>
											<input type="text" class="form-control"
												   name="precificacao_valor_mensalidade"
												   value="<?php echo(isset($precificacao) ? $precificacao->precificacao_valor_mensalidade : set_value('precificacao_valor_mensalidade')); ?>">

											<!--Trazendo a informação de erro-->
											<?php echo form_error('precificacao_valor_mensalidade', '<div class="text-danger">', '</div>'); ?>

										</div>

										<div class=" col-md-2 mb-20">
											<label>Número vagas</label>
											<input type="number" class="form-control" name="precificacao_numero_vagas"
												   value="<?php echo(isset($precificacao) ? $precificacao->precificacao_numero_vagas : set_value('precificacao_numero_vagas')); ?>">

											<!--Trazendo a informação de erro-->
											<?php echo form_error('precificacao_numero_vagas', '<div class="text-danger">', '</div>'); ?>

										</div>

										<div class=" col-md-2 mb-20">
											<label>Ativa</label>
											<select class="form-control" name="precificacao_ativa">

												<?php if (isset($precificacao)): ?>

													<option value="0" <?php echo($precificacao->precificacao_ativa == 0 ? 'selected' : '') ?> >
														Não
													</option>
													<option value="1" <?php echo($precificacao->precificacao_ativa == 1 ? 'selected' : '') ?> >
														Sim
													</option>

												<?php else: ?>

													<option value="0">Não</option>
													<option value="1">Sim</option>

												<?php endif; ?>

											</select>


										</div>

									</div>

									<?php if (isset($precificacao)): ?>

										<div class="form-group row">

											<div class=" col-md-12">
												<input type="hidden" class="form-control" name="precificacao_id"
													   value="<?php echo $precificacao->precificacao_id; ?>">
											</div>

										</div>

									<?php endif; ?>

									<div class="card-footer text-right">

										<button class="btn btn-primary">Enviar</button>
										<a class="btn btn-info"
										   href="<?php echo base_url($this->router->fetch_class()); ?>">Voltar</a>

									</div>

								</form>

								<div class="table-responsive">

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<!--			SIDEBAR CONFIGURAÇOES-->
		<?php $this->load->view('layout/sidebar_configuracoes'); ?>

	</div>
