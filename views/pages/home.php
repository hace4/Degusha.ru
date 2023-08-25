<?php
use App\services\Page;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
<?php Page::part('head') ?>
</head>

<body>
<?php Page::part('preloader') ?>
<?php Page::part('navbar') ?>


<div class="container d-flex justify-content-center mt-4"">
    <h1 class="fw-light" >Page home </h1>
</div>
</body>
</html>