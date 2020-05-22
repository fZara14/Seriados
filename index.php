

<?php
include('informações.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Seriados</title>
</head>
<body>
<div class="container">
  <h2>Seriados</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

<?php
$seriados = getSeriados();
foreach ($seriados as $seriado) {
    echo"<div class='carousel-inner'> <div class='item active'>
    <img src='{$seriado->image->medium}' alt='' style='width:100%;'>
  </div></div> <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
  <span class='glyphicon glyphicon-chevron-left'></span>
  <span class='sr-only'>Previous</span>
</a>
<a class='right carousel-control' href='#myCarousel' data-slide='next'>
  <span class='glyphicon glyphicon-chevron-right'></span>
  <span class='sr-only'>Next</span>
</a>";
    
    //echo"<p>{$seriado->summary}</p><br>";
}

?>

</div>
</div>
</body>
</html>