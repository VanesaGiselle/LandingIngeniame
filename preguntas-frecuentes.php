
		
		<?php
		
		if($_GET){
			
		
			if($_GET['id']== 1){
				
				$pregunta = '¿Para qué sirve tener un buen diseño gráfico?';
				$título = 'Diseño Gráfico';
				$respuesta = 'Todo entra por los ojos. Un buen diseño permite crear una mejor comunicación entre vos y tus usuarios. También mejorará exponencialmente tu imagen y resultará más sencillo transmitir tu idea hacia el mundo.';
			
			}else if($_GET['id']== 2){
				
				$pregunta = '¿Porqué es importante tener una Página Web?';
				$título = 'Páginas Web';
				$respuesta = 'Poseer una Página Web te brinda un alcance ilimitado hacia el consumidor. Poder ofrecer un servicio o un producto por intermedio de internet hace que cualquier persona se vuelva un cliente sin importar la distancia. Mediante este medio podes llegar al consumidor de una forma mas rapida y eficiente. En Ingeniame somos diseñadores y programadores web que trabajamos con las últimas tendencias en creatividad, diseño web y programación para que con un solo click la página proyecte la mejor imagen de tu negocio.';
				
			}else if($_GET['id']== 3){
				
				$pregunta = '¿Qué es un Sitio Web Responsive?';
				$título = 'Sitio Web Responsive';
				$respuesta = 'Hoy en día, en la era de los celulares y tablets, no alcanza con tener una Página Web solo para las computadoras de escritorio o portátiles, también es necesario para mejorar el servicio, poder visualizar toda tu información dentro de estos dispositivos. Un Sitio Web Responsive te brinda esta solución adaptándose a cualquier tipo de dispositivo.';
				
			}else if($_GET['id']== 4){
				
				$pregunta = '¿Por qué crear una App Mobile?';
				$título = 'App Mobile';
				$respuesta = 'En la actualidad, los dispositivos móviles estan ganando mucho terreno en los mercados,  es por eso que llevar tu Página Web a una Aplicación Mobile es crucial a la hora de mejorar la comunicación con los usuarios y la interacción de los mismos con tu producto o servicio.';
			
			};
		
		?>
		
		

		
		<section id="preguntas-frecuentes">
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="image-preguntas">
				<img class="image-responsive preguntas-img" src="imgs/preguntas-frecuentes.png" alt="Algunas dudas" class="dudas"/>
			</div>
		</div>
		<div class="col-xs-12 col-md-8">	
		<h2 class="title-preguntas-frecuentes">Preguntas Frecuentes</h2>			
			<div class="panel-group" id="accordion">
			
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
				  <a class="panel-title-style" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					<?php echo $pregunta; ?></a>
				  </h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse">
				  <div class="panel-body"><h3 class="preg-title"><?php echo $titulo; ?></h3><p><?php echo $pregunta; ?></p></div>
				</div>
			  </div>
			  
		</div><!-- fin accordion -->
	</div>
		
		<?php
		}else { echo "No elegiste ninguna pregunta <a href='index.php'>Click Aquí</a>"; };
		
		?>
		
