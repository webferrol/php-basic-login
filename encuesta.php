<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <pre>
    <?php
    print_r($_POST);
    ?>
  </pre>
  
  <?php
  $aciertos = 0;
  foreach ($_POST as $value) {
    if ($value === 'true')
      $aciertos++;
  }
  ?>
 

 <?php
 echo isset($_POST['submit']) ? "<mark>Número de aciertos $aciertos</mark>": '  ';
 ?>


  <form method="post">
    <?php
    require_once('./preguntas.php');

    foreach ($preguntas as $pregunta):
      extract($pregunta);  // <-- $pregunta, $respuesta, $input, $name
    ?>
      <div class="preguntas">
        <p><?=$pregunta?></p>
        <?php
        foreach ($input as $key => $texto) {
          $checked = isset($_POST[$name]) && $_POST[$name] == ($key+1) ? 'checked': '';
          printf('<p><input %s type="radio" name="%s" value="%d">&nbsp;%s</p>',
                  $checked,
                  $name,
                  ($key+1),
                  $texto);
        }
        ?>
      </div>
    <?php 
    endforeach;
    ?>   
    <input name="submit" type="submit" value="Enviar">
  </form>
</body>

</html>