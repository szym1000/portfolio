<?php
    if($config == null) {
        $json = file_get_contents('config.json');
        $config = json_decode($json, true);
    }

    echo '<div class="col-lg-4 col-lg-offset-2">';
    echo '<p>' . $config["aboutColumn1"] . '</p></div>';
    echo '<div class="col-lg-4">';
    echo '<p>' . $config["aboutColumn2"] . '</p>';
    echo '</div>';

//                <!--<div class="col-lg-8 col-lg-offset-2 text-center">
//                    <a href="#" class="btn btn-lg btn-outline">
//                        <i class="fa fa-download"></i> Download Theme
//                    </a>
//                </div>-->

?>