<?$turma=$turma[0];?>
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<?require 'menu.php';?>

	</div>
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<div class="page-bar">
				<h3 class="page-title">Editar Turmas</h3>
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
						 Já existem usuários com este curso e professor neste horário.
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
										<select class="form-control" id="" name="txCurso">
											<option value="">Selecione:</option>
											<?for($i=0;$i<count($cursos);$i++){?>
											<option value="<?=$cursos[$i]['id'];?>" <?if($turma['id_curso']==$cursos[$i]['id']){ echo " selected";}?>><?=$cursos[$i]['curso']?></option>
											<?}?>
										</select>
										<label for="form_control_1">Curso</label>
									</div>
									<div class="form-group form-md-line-input">
										<select class="form-control" id="" name="txProfessor">
											<option value="">Selecione:</option>
											<?for($i=0;$i<count($professores);$i++){?>
											<option value="<?=$professores[$i]['id']?>" <?if($turma['id_professor']==$professores[$i]['id']){ echo " selected";}?>><?=$professores[$i]['nome']?></option>
											<?}?>
										</select>
										<label for="form_control_1">Professor</label>
									</div>
									<div class="form-group form-md-line-input">
										<select class="form-control" id="" name="txHorario">
											<option value="">Selecione:</option>
											<option value=1 <?if($turma['id_horario']==1){ echo " selected";}?>>Manhã</option>
											<option value=2 <?if($turma['id_horario']==2){ echo " selected";}?>>Tarde</option>
											<option value=3 <?if($turma['id_horario']==3){ echo " selected";}?>>Noite</option>
											<option value=4 <?if($turma['id_horario']==4){ echo " selected";}?>>Integral</option>
										</select>
										<label for="form_control_1">Horário</label>
									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Ativo</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="ativo" class="md-check" name="txAtivo" value=1 <?if($turma['ativo']==1){ echo " checked";}?>>
												<label for="ativo">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input ">
										<input type="date" class="form-control date" id="" name="txEncerramento" value="<?=$turma['encerramento']?>">
										<label for="form_control_1">Data de Encerramento</label>
									</div>
									
									
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Domingo</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txDomingo" class="md-check" name="txDomingo" value=1 <?if($turma['dom']==1){ echo " checked";}?>>
												<label for="txDomingo">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Segunda-feira</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txSegunda" class="md-check" name="txSegunda" value=1 <?if($turma['seg']==1){ echo " checked";}?>>
												<label for="txSegunda">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Terça-feira</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txTerca" class="md-check" name="txTerca" value=1 <?if($turma['ter']==1){ echo " checked";}?>>
												<label for="txTerca">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Quarta-feira</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txQuarta" class="md-check" name="txQuarta" value=1 <?if($turma['qua']==1){ echo " checked";}?>>
												<label for="txQuarta">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Quinta-feira</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txQuinta" class="md-check" name="txQuinta" value=1 <?if($turma['qui']==1){ echo " checked";}?>>
												<label for="txQuinta">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Sexta-feira</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txSexta" class="md-check" name="txSexta" value=1 <?if($turma['sex']==1){ echo " checked";}?>>
												<label for="txSexta">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
												<span class="box"></span>
												Sim</label>
											</div>
										</div>

									</div>
									<div class="form-group form-md-line-input">
										<label for="form_control_1">Sábado</label>
										<div class="md-checkbox-inline">
											<div class="md-checkbox">
												<input type="checkbox" id="txSabado" class="md-check" name="txSabado" value=1 <?if($turma['sab']==1){ echo " checked";}?>>
												<label for="txSabado">
												<span></span>
												<span class="check"><i class="fa fa-check"></i></span>
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