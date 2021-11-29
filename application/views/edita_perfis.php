<?$perf=$perfil[0];?>
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<?require 'menu.php';?>

	</div>
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<div class="page-bar">
				<h3 class="page-title">Editar Perfil <strong><?=$perf['perfil']?></strong></h3>
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
						 Já existem perfis com este nome.
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
										<input type="text" class="form-control" id="" placeholder="Perfil" value="<?=$perf['perfil'];?>" name="txPerfil">
										<label for="form_control_1">Nome do Perfil</label>
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