<?php
function Logearse($Usuario,$Clave)
{	/*Incluimos el archivo que contiene la conexion*/	
	include_once("contectar.php");
	$Conectarme=@Conectar();
	$Consulta = "SELECT *  FROM Usuarios where Usuario='$Usuario' and Clave='$Clave'";
	
	$Resultados = @mysqli_query($Conectarme, $Consulta);
	if (@mysqli_num_rows($Resultados) > 0) 
	{		 
		while($Fila = mysqli_fetch_assoc($Resultados)) 
		{ /*Almacenamos en variables cada campo de la tabla para luego crear la seccion*/
			@session_start();
			@session_regenerate_id();
			/*Variable de Session	<>	Variable obtenida por URL*/
			$_SESSION['sUsuario']	= 	$Fila['Usuario'];
			$_SESSION['sNombre']	= 	$Fila['Nombre'];
			$_SESSION['sClave']		= 	$Fila['Clave'];
			$_SESSION['sCorreo']	= 	$Fila['Correo'];
			$_SESSION['sSexo']		= 	$Fila['Sexo'];
			$_SESSION['sCedula']	= 	$Fila['Cedula'];
			$_SESSION['sFechaNacimiento']		= 	$Fila['FechaNacimiento'];
			/*Cerramos la creacion de la Session*/
			@session_write_close();
			/*Redirigimos al home*/
			echo"<script>location.href='home.php';</script>";
		}
	}else
	{
		echo"<div>Usuario o Clave incorrecta, trate nuevamente</div>";
		echo"<div><a href='crear_cuenta.php'>Volver</a></div>";
	}
	mysqli_close($Conectarme);	
}
	
/*Definimos la Zona Horaria*/
date_default_timezone_set("America/Santiago");
/*Funcion para Crear Cuenta de Usuario (Estudiante)*/
function crearCuenta($Usuario,$Nombre,$Clave,$Correo,$Sexo,$Cedula,$FechaNacimiento)
{		
	//Incluimos el archivo de Conexion
	include_once("contectar.php");
	//Nos conectamos al servidor
	$Conectarme=Conectar();
	
	//Consultamos la tabla para verificar si ya existe un usuario igual al nuevo que se esta creando
	$Consulta = "SELECT Usuario  FROM Usuarios where Usuario='$Usuario'";

	$Resultados = mysqli_query($Conectarme, $Consulta);
	/*Si los resultados de la consulta >0 entonces ya existe un usuario registrar con el Nick enviado*/
	if (mysqli_num_rows($Resultados) > 0) 
	{
		 echo"<div class='Mensaje'>El Nick de <b>$Usuario</b> ya se encuentra en uso, seleccione otro</div>";
		 echo"<div class='Mensaje'><a href='crear_cuenta.php'>Volver a intentar</a></div>";
	} 
	else 
	{
		$Guardar="
			INSERT INTO Usuarios (Usuario, Nombre, Clave, Correo, Sexo, Cedula, FechaNacimiento)
			VALUES ('$Usuario', '$Nombre', '$Clave', '$Correo', '$Sexo','$Cedula', '$FechaNacimiento') 
		";
		echo "<div class='Mensaje'>Guardando....</div>";
		 
		if(mysqli_query($Conectarme, $Guardar))
		{
		  echo "<div>Felicidades, Cuenta creada correctamente, <a href='inicioSeccion.php'> Acceder</a></div>";
		}
		else
		{
		  echo "<div class='Mensaje'>No hemos podido crear la cuenta, revisa y trata nuevamente</div>";
		  
		}		
		/*Cerramos la conexion*/
		mysqli_close($Conectarme);		
	}
}
/*Funcion que controla las zonas privadas, 
determinar si algun usuario ha iniciado Session, sino
lo redirije al login, basta con llamar esta función en
cualquier pagina del sitio para ponerla privada.
*/
function validarSession()
{
	if(isset($_SESSION['sUsuario'])) 
	{
		/*Mostramos los datos del usuario logeado*/
		//echo$_SESSION['IdUsuario'];
		$Usuario=$_SESSION['sUsuario'];
		echo"
			<div>
				<p>Bienvenido:<b> {$_SESSION['sNombre']}</b></p>
				<p><a href='salir.php'>Salir</a></p>
			</div>
			";
	}
	else
	{		
		/*Redireccionamos a la pagina que le indique el usuario
		que debe logearse*/
		//echo"<script>location.href='sinCuenta.php';</script>";
		echo"
			<h3>Actualmente no estas logeado</h3>
			<h4><a href='inicioSeccion.php'>Inicia Seccion</a> para continuar</h4>
		";
	}
}
	
function listarClientes()
{
	include_once("contectar.php");
	$Conexion=Conectar();
	//Consultamos la tabla para verificar si ya existe un usuario igual al nuevo que se esta creando

	$Consulta = "SELECT *  FROM Usuarios";
	$Resultados = mysqli_query($Conexion, $Consulta);
	/*Si los resultados de la consulta >0 entonces ya existe un usuario registrar con el Nick enviado*/
	/*Creamos una tabla para mostrar los resultados*/
	echo"	<table class='TBL_Estudiantes'  width='99%' >
			<tr>
				<th>Nombre</th><th>Direccion</th><th>Telefono</th> <th>Edad</th>
			</tr>";

	if (mysqli_num_rows($Resultados) > 0) 
	{
		while($Fila = mysqli_fetch_assoc($Resultados)) 
		{
			/*Recogemos cada campo en una variable*/
			$Nombre		=$Fila["Nombre"];
			$Correo	=$Fila["Correo"];
			$Sexo	=$Fila["Sexo"];
			$Cedula		=$Fila["Cedula"];
			$FechaNacimiento		=$Fila["FechaNacimiento"];
			/*Por cada registro imprimimos una fila*/
			echo"
			<tr>
				<td>$Nombre</td><td>$Correo</td><td>$Sexo</td><td>$Cedula</td><td>$FechaNacimiento</td>
			</tr>";
		}		 
	} 
	else 
	{
		echo"
			<tr>
				<td colspan='5'>
					<div class='Errores'>No hay estudiantes registrados, se Tu el <a href='#'>primero</a></div>
				</td>
			</tr>
			
			";			 
	}
	echo"</table";
	/*Cerramos la conexion*/
	mysqli_close($Conexion);
}
?>