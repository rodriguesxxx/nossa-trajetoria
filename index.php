

<?php
  header('Content-Type: text/html; charset=utf-8');
  include("classes/Control.php");
  include("classes/Application.php");
  if(!isset($_COOKIE['visitou'])){
    setcookie('visitou', true, time() + (86400 * 30), "/");
    $control = new Control();
    $control->updateTotalAcess();
  }
  $app = new Application();
  // print_r($app->getAllInfo());
  $infos = $app->getAllInfo();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nossa Trajetória</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">  
</head>

<body>
  
<div class="timeline-container" id="timeline-1">
  <div class="timeline-header">
    <h2 class="timeline-header__title">MANOEL E MARIA</h2>
    <h3 class="timeline-header__subtitle">A NOSSA TRAJETÓRIA...</h3>
  </div>
  <div class="timeline">
  
      <?php foreach($infos as $info):?>
      <div class="timeline-item" data-text="<?php echo utf8_encode($info['bible'])?>">
      <div class="timeline__content"><img class="timeline__img" src="<?php echo 'imgs/'.$info['img'].'.jpg'?>"/>
      <h2 class="timeline__content-title"><?php echo $info['year']?></h2>
        <p class="timeline__content-desc"><?php echo utf8_encode($info['description'])?></p> 
      </div>
    </div>
    <?php endforeach;?>
    
  </div>
<h3  class="timeline-text_end" >A VOCÊ QUE CHEGOU ATÉ AQUI, OBRIGADO POR FAZER PARTE DA NOSSA TRAJETORIA.</h3>

</div>

<div class="demo-footer">Todos os direitos reservados a <a href="" target="_blank">Daniel Rodrigues P.</a></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
