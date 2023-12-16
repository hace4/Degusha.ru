<?php
$modal = <<<HTML
<div id="modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="msg"></p>
      </div>
      <div class="modal-footer">
        <button type="button" id='submitvideocontrol' class="btn close btn-success submitvideocontrol" oncclick="show()" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

HTML;
echo $modal;