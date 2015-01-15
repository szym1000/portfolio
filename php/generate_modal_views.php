<?php
    if($projects == null) {
        $json = file_get_contents('config.json');
        $config = json_decode($json, true);
        $projects = $config["projects"];
    }

    for($i=0; $i<sizeof($projects); $i++){
        //echo 'lalalala';
//        echo '<div class="col-sm-4 portfolio-item"><a href="#portfolioModal' . $i
//                . '" class="portfolio-link" data-toggle="modal">';
//        echo '<div class="caption"><div class="caption-content"><i class="fa fa-search-plus fa-3x"></i></div></div>';
//        echo '<img src="img/portfolio/' . $projects[$i]["projectPosterName"] . '" class="img-responsive" alt="">';
//        echo '</a></div>';

        echo '<div class="portfolio-modal modal fade" id="portfolioModal' . $i
                . '" tabindex="-1" role="dialog" aria-hidden="true">';
        echo '<div class="modal-content"><div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>';
        echo '<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2"><div class="modal-body">';
        echo '<h2>' . $projects[$i]["projectTitle"] . '</h2><hr class="star-primary">';

        if($projects[$i]["projectVideoName"] != "") {

        } else if ($projects[$i]["projectYouTubeURL"] != "") {
            echo '<iframe width="420" height="315" src="' . $projects[$i]["projectYouTubeURL"] . '"></iframe>';
        } else {
            echo '<img src="img/portfolio/' . $projects[$i]["projectPosterName"] . '" class="img-responsive img-centered" alt="">';
        }

        echo '<p>' . $projects[$i]["description"] . '</p>';
        echo '<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button></div></div></div></div></div></div>';
    }


//                            <video id="example_video_1" class="video-js vjs-                        default-skin vjs-big-play-centered"
//                                   controls preload="auto" width="640" height="264"
//                                   <!--poster="http://video-js.zencoder.com/oceans-clip.png"-->
//                                   data-setup='{"example_option":true}'>
//                                <source src="video/oceans.mp4" type='video/mp4' />
//                                <!--<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
//                                <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />-->
//                                <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
//                            </video>

?>