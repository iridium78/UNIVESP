<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Pesquisar...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>

				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Painel">
					<a href="<?=base_url();?>">
					<i class="icon-paper-plane"></i>
					<span class="title">
					Painel </span>
					</a>
				</li>
				
				<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Alunos</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						
						<li>
							<a href="<?=base_url().'alunos';?>">
							<i class="icon-tag"></i>
							Alunos</a>
						</li>
						<li>
							<a href="<?=base_url().'alunos';?>">
							<i class="icon-handbag"></i>
							Cadastro de Alunos</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-calendar"></i>
					<span class="title">Calendário</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="layout_horizontal_sidebar_menu.html">
							Nova Visita</a>
						</li>
						<li>
							<a href="index_horizontal_menu.html">
							Calendário de Atividades</a>
						</li>
						
						
					</ul>
				</li>
				
				
				
				<li class="heading">
					<h3 class="uppercase">Sistema</h3>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">Administração</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?=base_url().'cursos/cadastro';?>">
							Novo Curso</a>
						</li>
						<li>
							<a href="<?=base_url().'cursos';?>">
							Listar Cursos</a>
						</li>
						<li>
							<a href="<?=base_url().'turmas/cadastro';?>">
							Nova Turma</a>
						</li>
						<li>
							<a href="<?=base_url().'turmas';?>">
							Listar Turmas</a>
						</li>
						<li>
							<a href="<?=base_url().'usuarios/cadastro';?>">
							Novo Usuário</a>
						</li>
						<li>
							<a href="<?=base_url().'usuarios';?>">
							Listar Usuários</a>
						</li>
						<li>
							<a href="<?=base_url().'perfis/cadastro';?>">
							Novo Perfil</a>
						</li>
						<li>
							<a href="<?=base_url().'perfis';?>">
							Listar Perfis</a>
						</li>

					</ul>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>