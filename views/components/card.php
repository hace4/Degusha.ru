<?php

$card = <<<HTML

            <div class="col">
                <div class="card shadow-sm">

                    <video class="card-video" width="100%" height="225px" controls="controls" poster="">
                    </video>

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
HTML;

for ($i = 0; $i < $_SESSION['len'] ; $i++){
    echo $card;
}


