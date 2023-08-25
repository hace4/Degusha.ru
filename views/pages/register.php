<?php
use App\services\Page;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme=<?php echo "dark";?>>

<head>
<?php Page::part('head')?>
</head>

<body>
<?php Page::part('preloader') ?>
<?php Page::part('navbar')?>
<div class="container">
<?php Page::part("reg_form")?>
</div>
</body>

</html>