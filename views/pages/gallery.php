<?php
use App\services\Page;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <?php Page::part('head'); ?>
</head>

<body>
    <?php Page::part('navbar');
    Page::part("albom_text");
    ?>

    <div class="album py-5 bg-dark">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php Page::part('card')?>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>


</body>

</html>