<html lang="en">
        <head>
                <title>Movies - Public Page</title>
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
                        <h1>Public Interface</h1>
                        <br/>
                        <h3>Our Movies</h3>
                        <br/>
                        To sort the table please click on the table header elements or the single letters please.
                        <br/>
                        Please click on the like button to vote, after you vote the column #V will increment the value by one.
                        <br/>
                        When clicking on the Edit link, it will be redirected to /Admin route and there you can Edit the movie.
                        <br/>
                        <br/>
                        <a href="../admin" id="add-new" class="btn btn-Warning">Go to Admin</a>
                        <br/>
                        <br/>
                        <table id="ratingsTable" class="table table-hover table-dark center">
                                <thead>
                                        <tr>
                                                <th scope="col">N</a></th>
                                                <th scope="col">U</a></th>
                                                <th scroe="col">R</a></th>
                                                <th scope="col">V</a></th>
                                                <th scope="col">#V</a></th>
                                                <th></th>
                                        </tr>

                                </thead>
                                <tbody>
                                </tbody>
                        </table>
                </div>

                <script src="script.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
</html>