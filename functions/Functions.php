<?php

include_once 'config.php';

function add_new_movie_rating($movie_name, $movie_url, $movie_rating){
    # This function is adding a new movie rating to the DB-Table: movie_ratings
    # Arguments: 
        # 1. movie_name
        # 2. movie_url
        # 3. movie_rating
    # returns True on success otherwise False
    $conn = Connect();
    $sql_query = "INSERT INTO `movie_ratings` (`Id`, `Movie_Name`, `Movie_URL`, `Movie_Rating`, `Vote`,  `creation_timestamp`) VALUES (NULL, '".$movie_name."', '".$movie_url."', '".$movie_rating."', '0', current_timestamp())";

    $result = InsertQuery($sql_query, $conn);
    Disconnect($conn);	
    return $result;
}

function get_all_movie_ratings($sort){
    # This function is returning all movie ratings
    # Arguments: 0 
    # returns Arry of Arguments
    $order_by = "";
    if($sort != ""){
        $order_by = "ORDER BY ". $sort;
    }
    $conn = Connect();
    $sql_query = "SELECT * FROM `movie_ratings`". $order_by;
    $result = Query($sql_query, $conn);
    Disconnect($conn);	
    return $result;
}

function get_voting_value($movie_id){
    $conn = Connect();
    $sql_query = "SELECT Vote FROM `movie_ratings` WHERE `Id` = '".$movie_id."'"; 
    $result = Query($sql_query, $conn);
    Disconnect($conn);	
    return $result;
}

function do_voting($movie_id, $old_val){
    $conn = Connect();
    $new_val = intval($old_val)+1;
    $sql_query = "UPDATE `movie_ratings` SET Vote = '".$new_val."' WHERE `Id` = '".$movie_id."'";
    $result = UpdateQuery($sql_query, $conn);
    Disconnect($conn);	
    return $new_val;
}

function get_movie_rating($movie_id){
    # This function is returning all movie ratings
    # Arguments: movie_id
    # returns movie_rating
 
    $conn = Connect();
    $sql_query = "SELECT * FROM `movie_ratings` WHERE Id='".$movie_id."'";
    $result = Query($sql_query, $conn);
    Disconnect($conn);	
    return $result[0];
}

function movie_rating_exists($movie_id){
    $conn = Connect();
    $sql_query = "SELECT 1 FROM `movie_ratings` WHERE Id='".$movie_id."'";
    $result = Exists($sql_query, $conn);
    Disconnect($conn);	
    return $result;
}

function update_movie_rating($movie_id, $movie_name, $movie_url, $movie_rating){
    $conn = Connect();
    $sql_query = "UPDATE `movie_ratings` SET Movie_Name = '".$movie_name."', Movie_URL = '".$movie_url."', Movie_Rating = '".$movie_rating."' WHERE `Id` = '".$movie_id."'";
    $result = UpdateQuery($sql_query, $conn);
    Disconnect($conn);	
    return $result;
}
?>