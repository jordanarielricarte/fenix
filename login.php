<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inicio de Ventas</title>
		<link type="text/css" rel="stylesheet" href="css/login.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
    </head>


<body>
<div class="overlay">


<i class="fas fa-times-circle"> </i>


<form>
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Ingresa tu Cuenta</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p></p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="Nombre Usuario" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Contraseña" id="pwd"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in"> Ingresar </button>
   </div>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
	<button class="btn submits frgt-pass">¿Olvidaste tu Contraseña?</button>
<!--     Sign Up button -->
      <button class="btn submits sign-up">Registrarse 
<!--         Sign Up font icon -->
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
<!--      End Other the Division -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>

</body>

<script src="js/login.js"></script>
</html>
