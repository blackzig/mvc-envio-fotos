<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $viewName; ?></title>
</head>
<body>
    <h1>TOPO</h1>
    <a href="<?= BASE_URL; ?>">Home</a>
    <a href="<?= BASE_URL; ?>galeria">Galeria</a>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>