
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<?require 'menu.php';?>

	</div>
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<div class="page-bar">
				<h3 class="page-title">Cadastro de Usuários</h3>
				<?if(isset($status)&& $status==1){?>
				<div class="note note-success">
					<h4 class="block">Concluído.</h4>
					<p>
						 Operação realizada com sucesso.
					</p>
				</div>
				<?}?>
				<?if(isset($status)&& $status==2){?>
				<div class="note note-success">
					<h4 class="block">Erro.</h4>
					<p>
						 Já existem usuários com este email.
					</p>
				</div>
				<?}?>
			</div>
			
			<div class="row" style="margin-top:40px">
				<div class="col-md-12 ">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Preencha os campos abaixo</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="" placeholder="Seu nome" name="txNome">
										<label for="form_control_1">Nome do Usuário</label>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="" placeholder="a@a.com" name="txEmail">
										<label for="form_control_1">E-mail</label>
										<span class="help-block">email@exemplo.com</span>
									</div>
									<div class="form-group form-md-line-input ">
										<input type="password" class="form-control" id="" name="txSenha">
										<label for="form_control_1">Senha</label>
									</div>
									<div class="form-group form-md-line-input">
										<select class="form-control" id="" name="txPerfil">
											<option value="">Selecione:</option>
											<?for($i=0;$i<count($perfis);$i++){?>
											<option value="<?=$perfis[$i]['id']?>"><?=$perfis[$i]['perfil']?></option>
											<?}?>
										</select>
										<label for="form_control_1">Perfil de Usuário</label>
									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Administrador</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="admin" class="md-check" name="txAdmin" value=1>
												<label for="admin">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Ativo</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="ativo" class="md-check" name="txAtivo" value=1>
												<label for="ativo">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									
								</div>
								<div class="form-actions noborder">
									<button type="submit" class="btn blue">Salvar</button>
								</div>
							</form>
						</div>
					
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>