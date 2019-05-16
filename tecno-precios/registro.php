
<?php
include_once("controladores/funciones.php");
if ($_POST){
  $errores=validar($_POST,"registro");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario !== null){
      $errores["email"]="Usuario ya registrado";
    }else{
      $avatar = armarAvatar($_FILES);
      $registro = armarRegistro($_POST,$avatar);
      guardarUsuario($registro);
      header("location:login.php");
      exit;
    }  

  }
}

?>

<?php
include_once('head.php');
?>


<title>Registro</title>
</head>

<body>

<?php
include_once('searchbar2.php');
?>

    <div class="container-fluid p-0 __divregistro">

    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>

        <section class="formulario row">

            <article class="formulario1 articulo1 col-12 col-md-12 col-lg-6">
                <h1 class="__h1form">Registrarse</h1>
                <a href="login.php">
                    <h4 class="__h4registro">Ya tiene cuenta?</h4>
                </a>
                <br>

                <form class="form1 mt-1" action="" method="post" enctype= "multipart/form-data">
                    <label class="">Usuario:</label>
                    <input class="formatoform btn btn-outline-primary" id="nombre" type="text" name="nombre" value="<?= (isset($errores["nombre"]))? "" : persistir("nombre"); ?>" placeholder="Nombre de usuario">
                    <br>
                    <label class="" for="email">Email:</label>
                    <input class="formatoform btn btn-outline-primary" type="email" id="email" name="email" value="<?=(isset($errores["email"]))? "" : persistir("email");?>" placeholder="Ingrese su email">
                    <br>
                    <label class="" for="password">Contraseña:</label>
                    <input class="formatoform btn btn-outline-primary" type="password" id="password" name="password" value="" placeholder="Cree su contaseña">
                    <br>
                    <label class="" for="repassword">Confirme su contraseña:</label>
                    <input class="formatoform btn btn-outline-primary " type="password" id="repassword" name="repassword" value="" placeholder="Repita su contraseña">
                    <br>
                    <input class="archivo" type="file" name="avatar" value=""/>

                    <label class="" for=""> </label>
                    <button class="formatoform btn btn-primary btn-lg"  type="submit" name="button">Registrarse</button>

                    <label class="" for=""> </label>
                    <button class=" row formatoform borrar btn btn-outline-primary btn-lg" type="reset" name="button">Borrar</button>

                </form>

            </article>

            <article class="logoformulario articulo1 col-12 col-md-12 col-lg-6">

                <img class="imglateral"  width="100%" id="imgform" src="img/tecnolog.png" alt="">

            </article>

        </section>

    </div>

    
