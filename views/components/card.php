<?php

$card = <<<HTML

          <div class="col">
          <div class="card shadow-sm">
          <video class="card-video" width="100%" height="98%" controls="controls" poster="">
        </video>
            <div class="card-body">
              <p class="card-text">Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к дополнительному контенту. Этот контент немного длиннее.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

HTML;

for ($i = 0; $i < $_SESSION['len'] ; $i++){
    echo $card;
}


