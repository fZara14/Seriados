<?php
    include_once ('informações.php');
    $address = getAddress();
    
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta  name = "viewport"  content = " width = largura do dispositivo, escala inicial = 1.0 " >
    <title>Zariados</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">

</head>

<!-- <body onload = "carregar()"> -->
<div class="container">
    <header>
    
    </header>
<article>
        <div class="text-center">
            <h1 class="Titulo">Zariados</h1>
        </div><br>
        <form action="." method="POST">
        <div class="form-group text-center">
            <img src="<?php echo $address->Poster ?? "" ?>" width="140px">
        </div>
        <div class="form-group">
        
            <input type="text" class="form-control" id="Filme" aria-describedby="SearchFilm" placeholder="Digite o nome do seriado"name="nomefilme" value="<?php echo $address->Title ?? '' ?>">
        </div>
        <button type="submit" id="botao" class="btn btn-primary">Submit</button><br><br>
        <div class="form-group">        
            <input type="text" class="form-control" id="anodofilme" name="ano" value= "<?php echo $address->Year ?? '' ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="Tipodofilme" name="tipo" value= "<?php echo $address->Type ?? '' ?>">
        </div>
    </form>
</article>
</div>
</body>
</html>