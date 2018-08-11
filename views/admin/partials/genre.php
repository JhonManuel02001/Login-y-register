<?php 
if(isset($_SESSION['genero'])){

						$genre = $_SESSION['genero'];

					 	if ($genre == 'hombre') {
						echo '<img src="http://localhost/scriptweb/public/images/user.png" class="img-email">';
						}elseif($genre == 'mujer'){
							echo '<img src="http://localhost/scriptweb/public/images/userw.png" class="img-email">';
						}

					}
?>