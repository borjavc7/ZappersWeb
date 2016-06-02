<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Dirección:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>