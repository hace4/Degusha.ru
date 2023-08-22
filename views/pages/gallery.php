<?php
use App\services\Page;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <?php Page::part('head'); ?>
</head>

<body>
    <?php Page::part('navbar')?>
    <section class="py-5 text-center container d-flex justify-content-center" style="height:100vh">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-8 mx-auto align-self-center">
                    <h1 class="fw-light"><b>В поисках контента</b></h1>
                    <p class="lead text-muted">Это серия видеороликов от <b>Mutcrut49</b>, посвещеная нашей жизни, жизни
                        нашей маленькой но теплой компашки, здесь собраны одны из самых интересных и запоминающихся
                        моментов.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Главный призыв к действию</a>
                        <a href="#" class="btn btn-secondary my-2">Вторичное действие</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr class="fw-light">
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