<?php
$head = <<<HTML
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="assets/static/text.css" rel="stylesheet"  crossorigin="anonymous">
  
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js">
  <link rel="prerender" href="app\services\API\API_request.php">
  <link rel="prerender" href="views/components/card.php">
  <link rel="prerender" href="assets/js/main.js" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="shortcut icon" href="../faviconico" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="assets/js/preloader.js"></script>
  <title>Document</title>
</head>
HTML;
echo $head;