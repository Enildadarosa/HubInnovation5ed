<?php
include './vendor/autoload.php';
use \App\Entity\Colaborador;
use \App\Session\Login;

if(isset($_POST['logar'])){
    
        $login = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        //Buscar usuário por email
        $colab = Colaborador::colab_by_mail($login);
        if(!$colab instanceof Colaborador || !password_verify($_POST['passwd'],$colab->senha) ){
            echo '<script language="javascript">';
            echo 'alert("Usuário ou Senha inválidos, tente novamente!!")';
            echo '</script>';
        }else{
            Login::login($colab);
        }
        //echo "<pre>"; print_r($colab); echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub Innovation 5</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>


<form method="POST">
<div class="ring">
    <i style="--clr:rgb(255, 166, 0);"></i>
    <i style="--clr:#ff5900;"></i>
    <i style="--clr:#ff8f44;"></i>

    
        <div class="login">
          <h2>Login</h2>
          <div class="inputBx">
            <input type="email" name="email" placeholder="Usuário">
          </div>
          <div class="inputBx">
            <input type="password" name="passwd" placeholder="Senha">
          </div>
          <div class="inputBx">
            <input type="submit" name="logar" value="logar">
          </div>
        </div>
    
  </div>
</form>

</body>
</html>