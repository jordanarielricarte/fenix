
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link type="text/css" rel="stylesheet" href="css/login.css"/>
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="css/loginimage.css"/>   
    </head>


<body>
<div class="overlay">
      <i class="fas fa-times-circle"> </i>
         <form action="logearse.php" method="POST">
                   <div class="con">
                     <header class="head-form">
                        <h2>Ingresa tu Cuenta</h2>
                        <p></p>
                     </header>
                     <br>
                     <div class="field-set">
                        <span class="input-item">
                            <i class="fa fa-user-circle"></i>
                        </span>
                            <input class="form-input" name="email" id="txt-input" type="text" placeholder="Nombre Usuario" required>
                           <br>
                        <span class="input-item">
                           <i class="fa fa-key"></i>
                        </span>
                        <input class="form-input" type="password" placeholder="Contraseña" id="pwd"  name="password" required>
                        <span>
                           <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
                        </span>
                           <br>
                        <input type="submit" class="log-in" value="Registrarse">
                        </div>
                        <div class="other">
                           <button class="btn submits frgt-pass">¿Olvidaste tu Contraseña?</button>
                           <button  class="btn submits sign-up"><a href="registro.php">Registrarse </a>
                                 <i class="fa fa-user-plus" aria-hidden="true"></i>
                           </button>
                        </div>
                  </div>   
         </form>
</div>

</body>

<script src="js/login.js"></script>
</html>
