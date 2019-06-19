<?php
 include ('database.php');
 $message = '';
 if(!empty($_POST['email']) && !empty($_POST['password'])&& !empty($_POST['nombreusuario'])&& !empty($_POST['cliente'])) 
 {
    $sql = "INSERT INTO usuariofenix (email, password, nombreusuario, cliente)
    VALUES(:email, :password, :nombreusuario, :cliente)";  
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':password',$_POST['password']);
    $stmt->bindParam(':nombreusuario',$_POST['nombreusuario']);
    $stmt->bindParam(':cliente',$_POST['cliente']);
    if($stmt -> execute()){
        $message = 'Usuario creado exitosamente';
    } else {
        $message = 'El usuario no se pudo crear';
    }
 }
?>

<html lang="es">
   <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro</title>
		<link type="text/css" rel="stylesheet" href="css/login.css"/>
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="css/loginimage.css"/>   
    </head>

   <body>
       
   <div class="overlay">
      <i class="fas fa-times-circle"> </i>
      <form  id="formulario" action="registro.php" method="POST">
               <header class="head-form">
               <div class="con">
                              <h2>Registro</h2>
                              <p></p>
                              </header>
                              <br>
               <span class="input-item">
               <i class="fa fa-user-circle"></i>
               </span>
               <input class="form-input" name="email" id="txt-input" type="text" placeholder="Correo Electronico" required>
               <br>
               <span class="input-item">
               <i class="fa fa-key"></i>
               </span>
               <input class="form-input" name="password" id="txt-input" type="text" placeholder="Contraseña" required>
               <br>
               <span class="input-item">
               <i class="fa fa-user-circle"></i>
               </span>
               <input class="form-input" name="nombreusuario" id="txt-input" type="text" placeholder="Nombre de Usuario" required>
               <br>
               <span class="input-item">
               <i class="fa fa-user-circle"></i>
               </span>
               <input class="form-input" name="Cliente" id="txt-input" type="text" value="cliente frecuente" required>
               <button type="submit" value="registrar" class="log-in"> Registrarse </button>
               <?php if(!empty($message)): ?>
               <p><?= $message ?></p>
               <?php endif; ?>
               <h1><a href="login.php">Login </a></h1>
         </div>  
      </form>
</div>



   </body>

</html>
