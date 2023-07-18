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
</head>
<body>
    <?php include $configC->showPage(0); ?>
</body>
</html>