<?php

use App\services\Page;
use App\services\API\api_request;

api_request::api_conn();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <?php Page::part('head'); ?>
    <link rel="prefetch" href="http://degusha.api.local/Degusha_file/looking_for_contents/">


</head>

<body>
    <?php

    Page::part('modal');
    Page::part('navbar');
    Page::part("albom_text");
    Page::part("ModalForAddVideo");
    Page::part("card");
    ?>
    <script src="assets/js/showVideo.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/card_tools.js"></script>
    <script src="assets/js/addVideo.js"></script>

</body>

</html>