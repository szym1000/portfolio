<?php
    $json = file_get_contents('config.json');

    $config = json_decode($json, true);

    $projects = $config["projects"];

    for($i=0; $i<sizeof($projects); $i++){
        echo '<div class="col-sm-4 portfolio-item"><a href="#portfolioModal' . $i
                . '" class="portfolio-link" data-toggle="modal">';
        echo '<div class="caption"><div class="caption-content"><i class="fa fa-search-plus fa-3x"></i></div></div>';
        echo '<img src="img/portfolio/' . $projects[$i]["projectPosterName"] . '" class="img-responsive" alt="">';
        echo '</a></div>';
    }
?>