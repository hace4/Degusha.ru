<?php

use App\services\API\api_request;

class card
{
  private static $cont;
  private static $card;
  private static $end_cont;
  private static function show_cont()
  {
    echo <<<HTML

            <div class="album py-5 bg-dark">
                    <div class="container">
                        <div class="row button card-row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            HTML;
    
  }
  private static function show_end_cont()
  {
    echo  <<<HTML

                        </div>
                      </div>
                    </div>

                    HTML;
    
  }
  private static function show_empty_card()
  {
    echo <<<HTML

    <section class="py-5  text-center container d-flex justify-content-center " style="height: 100dvh;">
            <div class="container">
                <div class="row text">
                    <div class="col-lg-6 col-md-8 mx-auto align-self-center">
                        <h1 class="fw-light"><b>видосиков пока нет</b></h1>
                    </div>
                </div>
            </div>
        </section>
    HTML;
  }
  private static function show_card($id, $Head, $title, $viseo_src, $preview)
  {
    echo  <<<HTML

            <div class="col py-4 px-3">
            <div class="card shadow-sm ">
            <video src= $viseo_src class="card-video" width="100%" height="187.95px" controls="controls" poster= $preview>
          </video>
              <div class="card-body">
                <h1 class="card-text fw-light">$Head</h1>
                <p class="card-text">$title</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn del btn-sm btn-outline-danger" data-value= $id/delte>Удалить</button>
                    <button type="button" class="btn btn-sm btn-outline-warning" data-value= $id/edit>Редактировать</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        HTML;


  }
  public static function show_video()
  {
    api_request::request("GET", [], );
    self::show_cont();
    foreach (json_decode(api_request::$response, true) as $key => $value) {
      if($value !== "not found"){
                  self::show_card($value["id"], $value["Header"], $value["Title"], $value['video'], $value['preview']);
      }else{
        self::show_empty_card();
        break;
      }

        }

    self::show_end_cont();
  }
}

card::show_video();

