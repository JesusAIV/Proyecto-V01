<?php
require_once "./config/constantes.php";
require_once "./controller/configController.php";

$configC = new configController();

$viewUrl = $configC->viewUrl();
$titulo = $configC->titleWeb();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="<?php echo $configC->rutaCss() ?>global.css">
    <script src="<?php echo $configC->rutaJs() ?>sidebar.js"></script>
</head>
<body id="body-pd">
    <?php include $configC->showPage(0); ?>
</body>
</html>