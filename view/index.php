<?php
$xhr = false;
require_once "./config/constantes.php";
require_once "./controller/configController.php";
require_once "./controller/gestionController.php";

$gestion = new gestionController();
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="<?php echo $configC->rutaCss() ?>global.css">
    <script src="<?php echo $configC->rutaJs() ?>sidebar.js"></script>
</head>
<body id="body-pd">

    <?php include 'layout/sidebar_employees.php' ?>
    <div class="body_sidebar">
        <?php include $configC->showPage(0); ?>
    </div>

    <script src="<?php echo $configC->rutaJs() ?>grafico.js"></script>

</body>
</html>