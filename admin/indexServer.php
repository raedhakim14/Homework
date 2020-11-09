<?php 
    include_once "../functions/Functions.php";
    include_once "../connection/connection.php";


    if(isset($_POST) && isset($_POST['Key']) && $_POST['Key'] == "Add-New"){
        echo add_new_movie_rating($_POST['movie_name'], $_POST['movie_url'], $_POST['rating_range']);
    }
    
    if(isset($_POST) && isset($_POST['Key']) && $_POST['Key'] == "Edit-Exist"){
        echo update_movie_rating($_POST['movie_id'], $_POST['movie_name'], $_POST['movie_url'], $_POST['rating_range']);
    }

?>