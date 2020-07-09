<!-- SECCION DE AGENDAR TU PRIMERA CLASE DE LA PAGINA -->

<div class="content__agendar">
		<form action="#" class="content__agendar__form">
			<h2 class="content__agendar__form__title">Agenda tu Primer Clase</h2>

			<label class="content__agendar__form__label" for="user">Nombre</label>
			<input type="text" maxlength="10" id="user" class="content__agendar__form__input" />

			<label class="content__agendar__form__label" for="pass">Apellido</label>
			<input type="text" name="" id="pass" class="content__agendar__form__input" />

			<label for="select" id="select" class="content__agendar__form__label">Horario</label>
			<select name="" class="content__agendar__form__input"  id="select">
				<option value="">7:00 AM - 9:30 AM</option>
				<option value="">10:00 AM - 12:00 PM</option>
				<option value="">2:00 PM - 4:30 PM</option>
				<option value="">4:30 PM - 7:30 PM</option>
				<option value="">8:00 PM - 10:30 PM</option>
			</select>

			<div class="content__agendar__form__contain__radio">
				<h3>Disciplina</h3>
				<label> <input type="radio" name="genero" value="Hombre" /> Boxeo </label>
				<label> <input type="radio" name="genero" value="Mujer" /> KickBoxing </label>
				<label> <input type="radio" name="genero" value="Mujer" /> MuyThay </label>
				<label> <input type="radio" name="genero" value="Mujer" /> MMA </label>
			</div>

			<div class="content__agendar__form__input__button button">
				<input type="submit" value="Agendar" class="submit" class="content__agendar__form__input button__text" />
				<i class="button__icon far fa-calendar-alt"></i>
			</div>
		</form>
		<article class="content__agendar__location">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.2360797851393!
						2d-76.51753150719688!3d3.4774263710254565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
						4f13.1!3m3!1m2!1s0x8e30a624378e4973%3A0xef434bd4dbfda92!2sAtletic%20Fitness%20Gym
						!5e0!3m2!1ses!2sco!4v1594298507706!5m2!1ses!2sco" 
					width="600" height="450" frameborder="0" style="border:0;" 
					allowfullscreen="" aria-hidden="false" tabindex="0" class="content__agendar__location__map">
			</iframe>
		</article>
	</div>
