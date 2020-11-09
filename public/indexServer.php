<?php

    include_once "../functions/Functions.php";
    include_once "../connection/connection.php";

    if(isset($_POST) && $_POST['Key'] == "Get-All"){
        echo json_encode(get_all_movie_ratings($_POST['Sort']));
    }

    if(isset($_POST) && $_POST['Key'] == "Get-Vote"){
        $vote_res = get_voting_value($_POST['movie_id'])[0]['Vote'];
        echo json_encode(do_voting($_POST['movie_id'],  $vote_res));
    }
?>