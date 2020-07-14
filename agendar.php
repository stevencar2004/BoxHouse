<!-- SECCION DE AGENDAR TU PRIMERA CLASE DE LA PAGINA -->
<div class="content__agendar">
	<form action="#" class="box__form">
		<h2 class="form__title">Agendar</h2>
		
		<div class="input__box">
			<i class="icon__left fas fa-user"></i>
				<input
					type="text"
					maxlength="15"
					minlength="3"
					placeholder="Nombre"
					required
					class="form__input"
				/>
		</div>

		<div class="input__box width50">
			<!-- <i class="icon__left fas fa-calendar-alt"></i> -->
				<input
					type="date"
					maxlength="15"
					minlength="3"
					required
					class="form__input"
					min="2020-01-01" 
					max="2020-12-31"
				/>
		</div>

		<div class="input__box width50">
			<!-- <i class="icon__left fas fa-clock"></i> -->		
				<input
					type="time"
					maxlength="15"
					minlength="3"
					required
					class="form__input"
					min="07:30"
					max="10:30"
				/>
		</div>

		<div class="input__box input--radio">
			<input type="radio" name="disciplina" id="disciplina1">
			<label for="disciplina1">KickBoxing</label>

			<input type="radio" name="disciplina" id="disciplina2">
			<label for="disciplina2">Boxeo</label>

			<input type="radio" name="disciplina" id="disciplina3">
			<label for="disciplina3">MuiThay</label>

			<input type="radio" name="disciplina" id="disciplina4">
			<label for="disciplina4">Mma</label>
		</div>

		<div class="input__box">
			<input type="submit" value="Agendar" class="form__input" />
		</div>
	</form>
</div>
