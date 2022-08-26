<?php
    $errores = '';
     if(isset($_POST['submit'])){
            $nombre = $_POST['username'];
            if(!empty($nombre)){
                $nombre = filter_var(FILTER_SANITIZE_STRING);
            } else{
                $errores .= 'por favor agrega un nombre';
            }
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sass/copia.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" class="form" method="POST">
        <div class="form__container">
            <h1 class="form__h1">Login</h1>
            <div class="form__input">
                <label for="username" class="form__label">Username</label>
                <input type="text" name="username" id="username" class="form__input-text">
            </div>
            <div class="form__input">
                <label for="gmail" class="form__label">Gmail</label>
                <input type="mail" name="gmail" id="gmail" class="form__input-text">
            </div>
            <div class="form__textarea">
                <label for="textarea" class="form__campo-label">Consulta</label>
                <textarea name="campo" class="textarea" id="textarea"></textarea>
            </div>
            <button type="submit" class="form__button" name="submit">Enviar</button>
            <?php if(!empty($errores)):?>
                <?php echo '<h4 class="form__errores">'.$errores.'</h4>'?>
            <?php endif?>
        </div>
    </form>
</body>
</html>