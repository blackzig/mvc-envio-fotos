<?php
    $caminhoFotos = BASE_URL."assets/images/gostosas/";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?= BASE_URL; ?>assets/js/meus-eventos.js"></script>
    <title>Galeria</title>
</head>
<body>
    <fieldset>
        <legend>Adicionar uma Totosa</legend>
        <form method="POST" enctype="multipart/form-data">
            <label>Título:</label><br/>
            <input type="text" name="titulo" /><br/><br/>
            <label>Foto:</label><br/>
            <input type="file" name="arquivo" /><br/><br/>
            <input type="submit" value="Enviar Arquivo" />
        </form>
    </fieldset>
    <h1>Totosas</h1>
    <?php 
        foreach($fotos as $foto):
    ?>
        <img src="<?= $caminhoFotos.$foto['url']; ?>" alt="<?= $foto['titulo']; ?>" 
            height="<?= $foto['height']; ?>" width="<?= $foto['width']; ?> border='0' "/>
        <br/>
        <label><?= $foto['titulo']; ?></label>
        <hr/>
    <?php 
        endforeach;
    ?>

</body>
</html>