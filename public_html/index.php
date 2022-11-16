<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine([
  'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
]
);
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces&family=Space+Grotesk&display=swap" rel="stylesheet">
  <title>БЭМ</title>
</head>
<body>
    <main>
        <?php include 'orders.php'?>
        <div class="orders">
          <div class="container">
            <div class="price">
              <div class="navigation price__navigation">Pricing</div>
              <div class="price__title">Pricing plans</div>
              <div class="price__subtitle">Suspendisse mattis porttitor gravida et malesuada fames.</div>
            </div>
            <? echo $mustache->render('order-list', $orders)?>
          </div>
        </div>
    </main>
</body>