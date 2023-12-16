<?php
$modal = <<<HTML

<div class = 'modal fade' id = 'exampleModal' tabindex = '-1' aria-labelledby = 'exampleModalLabel' aria-hidden = 'true'>
<div class = 'modal-dialog'>
<div class = 'modal-content'>
<div class = 'modal-header'>
<h1 class = 'modal-title fs-5' id = 'exampleModalLabel'>Добавление видоса</h1>
</div>
<div class = 'modal-body'>
<form class="formForAdd" id="formForAdd" enctype='multipart/form-data'>
  <div class="mb-3">
    <label for="exampleInputTitle" class="form-label">Название</label>
    <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
    <div id="titleHelp" class="form-text">Название видоса которое будет отображаться в его карточке.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputTitle" class="form-label">Сезон</label>
    <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
    <div id="titleHelp" class="form-text">Сезон в который запилен контент.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputHeader" class="form-label">Описание</label>
    <input type="text" class="form-control" id="exampleInputHeader">
  </div>
  <div class="mb-3">
    <label for="exampleInputVideo" class="form-label">Видос</label>
    <input type="file" class="form-control" id="exampleInputVideo" multiple >
  </div>
  <div class="mb-3">
    <label for="exampleInputPreview" class="form-label">Привьюха</label>
    <input type="file" class="form-control" id="exampleInputPreview">
  </div>
</form>
</div>
<div class = 'modal-footer'>
<button type = 'button' class = 'btn btn-danger' data-bs-dismiss = 'modal'>Close</button>
<button type="submit" id="submitAddVideo" class="btn btn-success" data-bs-dismiss = 'modal' oncclick="show()">Submit</button>
</div>
</div>
</div>
</div>
</section>
HTML;
echo $modal;
