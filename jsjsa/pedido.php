<?php
$host="127.0.0.1:3306";
$user="u306725765_nech";
$password="Argento07";
$db="u306725765_nech";
$con = new mysqli($host,$user,$password,$db);

	$enlace = mysqli_connect($host, $user, $password, $bd);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<body>
    <div class="modal" id="modal">
        <div class="modal__content">
            <img src="" alt="" class="modal__img" id="modal__img">
        </div>
        <div class="modal__boton" id="modal__boton">X</div>
    </div>
     <header class="main-header">
        <div class="container container--flex">
           <div class="logo container column column--50">
              <h1 class="logo">La cocina de anita.</h1>
           </div>
           <div class="main-header__contactInfo column column--50">
              <p class="main-header__contactInfo__phone">
              <span class="icon-phone">627 108 8846.</span>
              </p>
              <p class="main-header__contacInfo__addres">
                 <span class="icon-location">Ubicación:
hidalgo del parral chihuahua, calle ojito 32 col. centro 33850</span>

              </p>

           </div>
        </div>
     </header>
     <nav class="main-nav">
        <div class="container container--flex">
         <span class="icon-menu" id="btnmenu"></span>
         <ul class="menu" id="menu">
             <li class="menu__item"><a href="index.html" class="menu__link">Inicio</a></li>
             <li class="menu__item"><a href="nosotros.html" class="menu__link">Nosotros</a></li>
             <li class="menu__item"><a href="galeria.html" class="menu__link menu__link--select">Galería</a></li>
             <li class="menu__item"><a href="contacto.html" class="menu__link">Pedidos</a></li>
         </ul>
         <div class="social-icon">
            <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
            <a href="" class="social-icon__link"><span class="icon-mail"></span></a>

         </div>
        </div>
     </nav>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Pedido para la cocina de anita</title>
        <link rel="stylesheet" type="text/css" href="estilo2.css">
    </head>
    <body>
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario2" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre.">
				<input type="text" name="domicilio" placeholder="domicilio.">
				<input type="text" name="telefono" placeholder="telefono.">
				<input type="text" name="pedido" placeholder="pedido.">


				

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="dem" value="Enviar pedido">
		</form>
		
						
						
				
				
			</table>
		</div>
	</div>
	<script src="formulario2.js"></script>
</body>
</html>
<?php
	if(isset($_POST['dem'])){
		$nombre =$_POST["nombre"];
		$domicilio=$_POST["domicilio"];
		$telefono=$_POST["telefono"];
		$pedido=$_POST["pedido"];
		$id= rand (1,99);

		$insertarDatos = "SELECT * FROM `datos` VALUES('$nombre',
													'$domicilio',
													'$telefono',
													'$pedido',
													'$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
 <link rel="stylesheet" href="CSS/normalize.css">
	   <link rel="stylesheet" href="CSS/estilos.css">
	   <link rel="stylesheet" href="CSS/galeria.css">
	   <link rel="stylesheet" href="CSS/font.css">
<section class="gruop today-special">
       <h2 class="group__title">Especiales de hoy </h2>
       <div class="container container--flex">
           <div class="column column--50--25">
               <img src="IMAGENES/enchiladas.jpg" alt="" class="today-special__img">
               <div class="today-special__title">Enchiladas verdes.</div>
               <div class="today-special__price">$55</div>
           </div>
           <div class="column column--50--25">
               <img src="IMAGENES/mole.jpg" alt="" class="today-special__img">
               <div class="today-special__title">Pollo con mole. </div>
               <div class="today-special__price">$55</div>
           </div>
           <div class="column column--50--25">
               <img src="IMAGENES/milanesa.jpg" alt="" class="today-special__img">
               <div class="today-special__title">Milaneza. </div>
               <div class="today-special__price">$60</div>
           </div>
           <div class="column column--50--25">
               <img src="IMAGENES/pechuga.jpg" alt="" class="today-special__img">
               <div class="today-special__title">Pechuga. </div>
               <div class="today-special__price">$60</div>
           </div>
             <div class="column column--50--25">
               <img src="https://cdn7.kiwilimon.com/ss_secreto/2669/640x426/2669.jpg.webp" alt="" class="today-special__img">
               <div class="today-special__title">Posole. </div>
               <div class="today-special__price">$130</div>
           </div>
            <div class="column column--50--25">
               <img src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2019/08/recetas-de-comida-mexicana-con-crema-economica.jpg" alt="" class="today-special__img">
               <div class="today-special__title">Tacos dorados de papa. </div>
               <div class="today-special__price">$45</div>
           </div>
              <div class="column column--50--25">
               <img src="https://cdn.sanity.io/images/jsdrzfkj/production-esmx/b7f83f6248a5e4c8064afde75ece4718b3335c87-2184x853.jpg?w=800&h=312&fit=crop" alt="" class="today-special__img">
               <div class="today-special__title">Quesicarnes. </div>
               <div class="today-special__price">$70</div>
           </div>
                <div class="column column--50--25">
               <img src="https://www.antojoentucocina.com/wp-content/uploads/2019/10/hamburguesas-salmon-5.jpg" alt="" class="today-special__img">
               <div class="today-special__title">Tortitas de papa. </div>
               <div class="today-special__price">$20</div>
           </div>
       </div>
   </section>
   
   
    

   

   </main>
   <footer class="main-footer">
       <div class="container container--flex">
           <div class="column column--33">
            <h2 class="column__title">¿Porqué visitarnos?</h2>
            <p class="column__txt"> Para que degustes lo mejor de la comida nacional.</p>
           </div>
           <div class="column column--33">
               <h2 class="column__title">Contáctanos.</h2>
            <p class="column__txt"><a href="" class="ubicacion"></a>hidalgo del parral chihuahua, calle ojito 32 col. centro 33850</p>
            <p class="column__txt"><a href="" class="Telefono"></a>627 108 8846</p>
            <p class="column__txt"><a href="" class="E-mail"></a>cocina_anita32@gmail.com</p>
            
           </div>
           <div class="column column--33">
            <h2 class="column__title">Síguenos en nuestras redes sociales</h2>
            <p class="column__txt"><a href="" class="icon-facebook"></a>Facebook</p>
            <p class="column__txt"><a href="" class="icon-instagram"></a>Instagram</p>
            <p class="column__txt"><a href="" class="icon-twitter"></a>Twitter</p>
           </div>
           <p class="copy">  © 2022 "La cocina de anita". | Todos los derechos reservados </p>
       </div>
   </footer>
   <script src="js/menu.js"></script>
   <script src="js/modal.js"></script>
</body>
