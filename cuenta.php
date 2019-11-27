<?php 
	include_once("Header.php");
?>
    <section class="bg-6 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        
        </div><!-- container -->
</section>

<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Estado de Cuenta</h2>
                        <p class="mx-w-700x mlr-auto">
                </div>

				<?php
					if($_POST)
					{
						//echo"FORM ENVIADOS";
						/*2-Recibimos los Datos*/
						$Usuario=$_POST['usuario'];
						$Nombre=$_POST['nombre'];
						$Clave=$_POST['clave'];
                        $RepClave=$_POST['repclave'];
						$Correo=$_POST['correo'];
						$Sexo=$_POST['sexo'];
						$Cedula=$_POST['cedula'];
						$FechaNacimiento=$_POST['FechaNacimiento'];
						
						/*3-Validamos los datos*/
						if(empty($Usuario))
						{
							echo"<h4>Debe indicar su Usuario</h4>";
						}
						if(empty($Nombre))
						{
							echo"<h4>Debe indicar su Nombre</h4>";
						}
						if(empty($Clave))
						{
							echo"<h4>Debe indicar su Clave</h4>";
						}
                        if($Clave<>$RepClave)
                        {
                          echo"<h2>Las claves no coinciden</h2>";
                        }
						if(empty($Correo))
						{
							echo"<h4>Debe indicar su Correo</h4>";
						}
						if(empty($Cedula))
						{
							echo"<h4>Debe indicar su cedula</h4>";
						}
						if(empty($FechaNacimiento))
						{
							echo"<h4>Debe indicar su fecha de nacimiento</h4>";
						}
                        /*Conectarse al Servidor DB y Guardar*/
						if( 
                            (!empty($Usuario)) && (!empty($Nombre)) && (!empty($Clave)) && (!empty($Correo))  &&($Sexo!="Seleccione") && (!empty($Cedula)) &&
                            (!empty($FechaNacimiento))
                        )
                      {
                        include_once("Funciones.php");
                        $Clave=md5($Clave);
                        crearCuenta($Usuario,$Nombre,$Clave,$Correo,$Sexo,$Cedula,$FechaNacimiento);
					  }
					  else 
					  {
						echo "<h2>Faltan campos por completar o llenar $Sexo</h2>";
					  }
						}
						else
						{
							echo"<h2>Ning&uacute;n dato enviado</h2>";
						}
				?>
				<!-- /. Formulario Inscribirte -->

			</div> <!-- /.container -->
<!--Fin del Cuerpo -->
    
</section>

<?php 
	include_once("Footer.php");
?>