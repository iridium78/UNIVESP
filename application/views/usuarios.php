
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
			</div>
			
			<div class="row" style="margin-top:40px">
				<div class="col-md-12 ">
					
					<div class="portlet-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th>
										 #
									</th>
									<th>
										Nome
									</th>
									<th>
										E-mail
									</th>
									<th>
										 Status
									</th>
									<th>
										 Data de Cadastro
									</th>
								</tr>
								</thead>
								<tbody>
								<?for($i=0;$i<count($usuarios);$i++){?>
									<tr>
										<td>
											 <a href="<?=base_url().'usuarios/editar/'.md5($usuarios[$i]['id'])?>"><i class="fa fa-user"></i> <?=$usuarios[$i]['id'];?></a>
										</td>
										<td>
											 <strong><?=$usuarios[$i]['nome'];?></strong>
										</td>
										<td>
											<?=$usuarios[$i]['email'];?> 
										</td>
										<td>
											 <?if($usuarios[$i]['ativo']==1){?><span class="label label-sm label-success">Ativo</span><?}else{?><span class="label label-sm label-danger">Inativo</span><?}?>
										</td>
										<td>
											<?=date("d/m/Y H:i",strtotime($usuarios[$i]['dt_cadastro']));?> 
										</td>
									</tr>
								<?}?>
								</tbody>
							</table>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>