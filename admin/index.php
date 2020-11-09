<?php 
        if(isset($_GET['id'])){
                # Page Edit Mode
                require_once 'indexServer.php';
                
                if(movie_rating_exists($_GET['id'])){
                        $movie_rating = get_movie_rating($_GET['id']);               
                } else {
                        die("Required Id does not exist.");
                }
        }
?>
<html lang="en">
        <head>
                <title>Movies - Admin Page</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta charset="UTF-8">
                <meta name="description" content="Movies Rating website">
                <meta name="keywords" content="HTML, CSS, JavaScript">
                <meta name="author" content="Raed Hakim">
                
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="style.css">
                
                <script src="https://code.jquery.com/jquery-3.1.1.js"></script>  
        </head>
        <body>
                <div class="container">
                        <h1>Admin Interface</h1>
                        <br/>
                        <form id="add_favorite_movie">
                                <h3>Add Your Favorite Movie</h3>
                                <br/>
                                <hr/>
                                <a href="../public" id="add-new" class="btn btn-Warning">Go to Public</a>

                                <?php 
                                if(isset($movie_rating)){
                                ?>
                                        <a href="../admin" id="add-new" class="btn btn-primary">Add New</a>
                                        <br/>
                                <?php 
                                }
                                ?>
                                <br/>
                                <h7><span class="required">*</span> required fields</h7>
                                <hr/>
                                <?php 
                                if(isset($movie_rating)){
                                        ?>
                                        <input type="hidden" id="movie_id" value="<?php  echo $movie_rating['Id']; ?>"/>
                                        <?php 
                                } 
                                ?>
                                <div class="form-group">
                                        <label for="movie_name">Movie Name</label>
                                        <input type="text" id="movie_name" name="movie_name" class="form-control" placeholder="Movie Name" value="<?php if(isset($movie_rating)){ echo $movie_rating['Movie_Name'];} ?>">
                                        <small id="input_help" class="form-text text-muted"><span class="required">*</span> Please enter your favorite movie name.</small>
                                </div>
                                <div class="form-group">
                                        <label for="movie_url">IMDB Page URL</label>
                                        <input type="url" id="movie_url" name="movie_url" class="form-control" placeholder="Movie URL" value="<?php if(isset($movie_rating)){ echo $movie_rating['Movie_URL'];} ?>">
                                        <small id="input_help" class="form-text text-muted"><span class="required">*</span> Please enter your favorite movie IMDB URL.</small>
                                </div>
                                <div class="form-group">
                                        <label for="rating_range">Movie Rating</label>
                                        <input type="range" id="rating_range" name="rating_range" min="0" max="10" class="form-control-range" value="<?php if(isset($movie_rating)){ echo $movie_rating['Movie_Rating'];} ?>">
                                        <small class="form-text text-muted"><span class="required">*</span> Rating Value: <span id="rating_value"></span></small>
                                </div>
                                <hr/>
                                <?php 
                                if(isset($movie_rating)){
                                ?>
                                        <button type="button" id="edit" class="btn btn-danger">Edit</button>
                                <?php
                                } else {
                                ?>
                                        <button type="button" id="add" class="btn btn-primary">Add</button>
                                <?php      
                                }
                                ?>
                                        <button type="reset" class="btn btn-secondary">Clear</button>
                        </form>
                        <br/>
                        <div id="success_msg" class="p-3 mb-2 bg-success text-white hide"></div>
                        <div id="error_msg" class="p-3 mb-2 bg-danger text-white hide"></div>
                </div>
               
                
                
                <script src="script.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>