<?php session_start();?> 
<?php
    include_once("header.php");
?> 
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(img/s6.jpg);">
        <div class="overlay"></div>
        <div class="gtco-container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="display-t">
                                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                                <h1>Bienvenid@</h1>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</header>

<div id="gtco-features">
        <div class="row">
                <div class="col-md-8 col-md-offset-2 gtco-heading text-center animate-box">
                        <h1 class="text-center"><strong>Estado cuenta</strong></h1>
                        
                        <?php
                        include_once("Funciones.php");
                        validarSession();
                        ?>
                </div>
        </div>
</div>


<div class="gtco-cover gtco-cover-sm" style="background-image:url(img/4.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><b>Algunos servicios</b></h1>
							<h2>Si te interesa alguno visita el tu local de preferencia y practícalo.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="feature-center">
						<span class="icon">
							<img src="img/icon/yoga.png">
						</span>
						<h3>Yoga</h3>
						<p>Es una eficaz terapia de cuidado integral. Cuerpo, mente y espíritu se fortalecen y serenan al practicar las asanas, la respiración y la meditación.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="feature-center">
						<span class="icon">
							<img src="img/icon/zumba.png">
						</span>
						<h3>Zumba</h3>
						<p>Una disciplina que fusiona baile coreográfico y ejercicios específicos de un entrenamiento cardiovascular, pero sobre todo es una forma de hacer ejercicio sin sentirlo. Son de diferentes ritmos, se trabaja la resistencia aeróbica, beneficiosa para el corazón y se queman calorías.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="feature-center">
						<span class="icon">
							<img src="img/icon/body.png">
						</span>
						<h3>Body Combat</h3>
						<p>Programa de ejercicios cardiovasculares en grupo que consiste en realizar movimientos de diferentes artes marciales como el taekwondo, karate, capoeira, tai chi o boxeo, entre otros, a través de coreografías con música en la que se pueden ejercitar brazos, hombros, espalda, piernas y abdominales, permitiendo así mejorar la flexibilidad, la fuerza, la coordinación y la resistencia cardiovascular.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="feature-center">
						<span class="icon">
							<img src="img/icon/abdominals.png">
						</span>
						<h3>Abdomen y Glúteo</h3>
						<p>Practicar esta clase sirve para fortalecer y tonificar abdomen, glúteos y piernas, muy sufridas por la vida sedentaria, y que mucha gente quiere mejorar, sobre todo, las mujeres.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="feature-center">
						<span class="icon">
							<img src="img/icon/dance.png">
						</span>
						<h3>Strong</h3>
						<p>STRONG by Zumba® es un entrenamiento revolucionario de alta intensidad guiado por música para motivarte a alcanzar tus objetivos de fitness más ambiciosos.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
				<div class="feature-center">
						<span class="icon">
							<img src="img/icon/balance.png">
						</span>
						<h3>Body Balance</h3>
						<p>Es un programa de entrenamiento inspirado en el Yoga, el Tai Chi y el Pilates que mejora la flexibilidad, la fuerza y te aporta una sensación de calma, armonía y bienestar.</p>
					</div>
				</div>

			</div>


		</div>
	</div>
<?php
    include_once("footer.php");
?> 