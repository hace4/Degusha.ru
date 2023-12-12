<?php
$albom_text = <<<HTML

<section class = 'text-al py-5 text-center container d-flex justify-content-center ' style = 'height: 100dvh;'>
<div class = 'container'>
<div class = 'row text'>
<div class = 'col-lg-6 col-md-8 mx-auto align-self-center'>
<h1 class = 'fw-light'><b>В поисках контента</b></h1>
<p class = 'lead text-muted'>Это серия видеороликов от <b>Mutcrut49</b>, посвещеная нашей жизни, жизни
нашей маленькой но теплой компашки, здесь собраны одны из самых интересных и запоминающихся
моментов.</p>
<p>
<a href = '#' class = 'btn btn-success my-2'>Главный призыв к действию</a>
<a href = '#' class = 'btn btn-warning my-2'>Вторичное действие</a>
</p>
</div>
</div>
<div class = 'appendvideo'>
<hr class = ''>
<div class = 'control d-flex flex-row'>
<button class = 'btn btn-warning ' data-bs-toggle = 'modal' data-bs-target = '#exampleModal'>
Добавить видео
</button>
</div>

</div>
</div>

</section>
HTML;
echo $albom_text;