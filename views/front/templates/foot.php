<center>
<footer>

	<div class="div-foot">
			<ul>
		<h2>ScriptWeb</h2>
	
		<li><a href="http://localhost/scriptweb/index.php">Inicio</a></li>
		<li><a href="http//localhost/scriptweb/front/land_pages/scriptweb/ideas/categorias.php">Ideas</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/scriptweb/proyectos/lideres.php">Proyectos</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/scriptweb/desarrollo/fase_analisis.php">Desarrollo</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/scriptweb/clases/programacion.php">Clases</a></li>
    </ul>
<ul>
		<h2>Nosotros</h2>
		
		<li><a href="http//localhost/scriptweb/front/land_pages/nosotros/acerca_de.php">Acerca de..</a></li>
		<li><a href="http://localhost/scriptweb/views/front/acerca.php">Contactanos</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/nosotros/centro_formacion.php">Centros de formación</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/nosotros/estrctura_aprendizaje.php">Estructura de aprendizaje</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/nosotros/culturizate.php">Culturizate</a></li>
    </ul>
	
	<ul>
		<h2>Informate</h2>
		
		<li><a href="http//localhost/scriptweb/front/land_pages/informate/esquemas_trabajo.php">Esqeumas de trabajo</a></li>
		<li><a href="http//localhost/scriptweb/front/land_pages/informate/semilleros_investigacion.php">Semilleros de investigación</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/informate/servidores.php">Servidores</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/informate/subdominios.php">Subdominios</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/informate/creacion_ideas.php">Creación de ideas</a></li>
    </ul>
	<ul>
		<h2>+</h2>
		
		<li><a href="http//localhost/scriptweb/front/land_pages/plus/glosario_terminos.php">Glosario de términos</a></li>
		<li><a href="http//localhost/scriptweb/front/land_pages/plus/categorizaciones.php">Categorizaciones</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/plus/tipologias.php">Tipologías</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/plus/galeria.php">Galerias</a></li>
        <li><a href="http//localhost/scriptweb/front/land_pages/plus/grandes_proyectos.php">Grandes proyectos</a></li>
    </ul>
    </div>
<div class="div-foot_b">
	<figure>
	<a href="https://www.facebook.com/" target="blank_"><img src="http://localhost/scriptweb/public/images/iconos/Redes sociales/facebook.png"   title="facebook"alt="facebook"></a>
	<a href="https://twitter.com/?lang=en" target="blank_"><img src="http://localhost/scriptweb/public/images/iconos/Redes sociales/github.png"  title="Twitter" alt="Twitter"></a>
	<a href="https://www.youtube.com/" target="blank_"><img src="http://localhost/scriptweb/public/images/iconos/Redes sociales/twitter.png"   title="Youtube" alt="Youtube"></a>
	<a href="https://github.com/" target="blank_"><img src="http://localhost/scriptweb/public/images/iconos/Redes sociales/youtube.png"    title="GitHub" alt="GitHub"></a>
</figure>
</div>
<div class="div-foot_c">
	<p>
		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
	</p>

</div>
<div class="div-foot_d">
	<p>
	 Todos los derechos Reservados a ScriptWeb <?php echo date ('Y'); ?>.
	</p>
</div>

   
</footer>
</center>

</body>
<script type="text/javascript"></script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</html>