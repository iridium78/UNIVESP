
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<?require 'menu.php';?>

	</div>
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<div class="page-bar">
				<h3 class="page-title">Cursos Cadastrados</h3>
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
									<th width=90>
										 #
									</th>
									<th>
										Curso
									</th>
									<th>
										Status
									</th>
									
								</tr>
								</thead>
								<tbody>
								<?for($i=0;$i<count($cursos);$i++){?>
									<tr>
										<td>
											 <a href="<?=base_url().'cursos/editar/'.md5($cursos[$i]['id'])?>"><i class="fa fa-user"></i> <?=$cursos[$i]['id'];?></a>
										</td>
										<td>
											 <strong><?=$cursos[$i]['curso'];?></strong>
										</td>
										<td>
											 <?if($cursos[$i]['ativo']==1){?><span class="label label-sm label-success">Ativo</span><?}else{?><span class="label label-sm label-danger">Inativo</span><?}?>
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