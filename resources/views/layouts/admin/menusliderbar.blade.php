<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
		<ul class="nav side-menu">
		@if(Auth::user()->usu_tusuario_id==1)
			<li><a><i class="fa fa-gear"></i> Configuración <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="{!!route('registromodulorfid')!!}">Registro modulo RFID</a></li>
					<li><a href="{!!route('registrofuncionariosfid')!!}">Registro de funcionarios</a></li>
				</ul>
			</li>
		@endif
		<li><a><i class="fa fa-male"></i> Administración <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
				<li><a href="{!!route('controlaccc')!!}">Control de acceso usuarios</a></li>
				<li><a href="{!!route('registroinvitados')!!}">Registro de invitados</a></li>
				<li><a href="{!!route('controlinvitados')!!}">Control de invitados</a></li>
				<li><a href="form_validation.html">Reportes</a></li>
			</ul>
		</li>
	</ul>
</div>
</div>