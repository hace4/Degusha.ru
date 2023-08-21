<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <?php require_once 'views/components/head.php' ?>
</head>

<body>
    <?php require_once 'views/components/navbar.php' ?>
    <?php use App\services\API\API_request; ?>
    <script src="assets/js/main.js"></script>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img" src="" alt="" width="100%" height="225px">
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em"><?php //echo json_decode(API_request::GET(1))[0]->video; ?></text>
                    </img>

                    <div class="card-body">
                        <p class="card-text"></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>