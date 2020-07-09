<!-- SECCION DE AGENDAR TU PRIMERA CLASE DE LA PAGINA -->

<div class="content__agendar">
		<form action="#">
			<h2>Agenda tu Primer Clase</h2>

			<label for="user">Nombre</label>
			<input type="text" maxlength="10" id="user" />

			<label for="pass">Apellido</label>
			<input type="text" name="" id="pass" />

			<label for="select" id="select">Selecciona tu horario</label>
			<select name="" id="select">
				<option value="">Colombia</option>
				<option value="">Brasil</option>
				<option value="">Estados Unidos</option>
				<option value="">Mexico</option>
				<option value="">Chile</option>
			</select>

			<legend>Disciplina</legend>
			<label> <input type="radio" name="genero" value="Hombre" /> Boxeo </label>
			<label> <input type="radio" name="genero" value="Mujer" /> KickBoxing </label>
			<label> <input type="radio" name="genero" value="Mujer" /> MuyThay </label>
			<label> <input type="radio" name="genero" value="Mujer" /> MMA </label>

			<input type="submit" value="Agendar" class="submit" />
		</form>
	</div>
