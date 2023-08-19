<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
<?php require_once 'views/components/head.php'?>
</head>

<body>
<?php require_once 'views/components/navbar.php'?>
<script src="assets/js/main.js"></script>
<div class="container d-flex justify-content-center mt-4"">
    <?php 
        use App\services\API\API_request;
        API_request::GET();
    ?>
</div>
</body>
</html>