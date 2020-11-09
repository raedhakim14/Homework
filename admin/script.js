function ValidURL(url) {
        var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
        if(!regex .test(url)) {
                return false;
        } else {
                return true;
        }
}

$(document).ready(function(){
        $("#add").click(function(){
                /* 
                        Hide at the beginning every msg appears 
                                                                        */
                $("#error_msg").hide();
                $("#success_msg").hide();
                /* 
                        Collecting values of all inputs and save them into variables 
                                                                                        */
                var movie_name = $("#movie_name").val();
                var movie_url = $("#movie_url").val();
                var rating_range = $("#rating_range").val();
                
                /* 
                        check if inputs are empty 
                                                        */
                if(movie_name.length != 0 && movie_url.length != 0){
                        /* 
                                Creating POST String to send to IndexServer.php via AJAX Request 
                                                                                                        */
                                if(ValidURL(movie_url)){
                                        var dataString = 'movie_name='+movie_name+'&movie_url='+movie_url+'&rating_range='+rating_range+'&Key=Add-New';
                                        $.ajax({
                                                type: "POST",
                                                url: "indexServer.php",
                                                data: dataString,
                                                cache: false,
                                                success: function(answer){
                                                        if(answer){
                                                                $("#success_msg").show().text("Movie Rating has been added to Database");
                                                                $("#movie_name").val('');
                                                                $("#movie_url").val('');          
                                                        }
                                                        else {
                                                                $("#error_msg").show().text("Movie Rating has been added to Database");
                                                        }
                                                }
                                        });
                                } else {
                                        $("#error_msg").show().text("Movie URL is not Valid");           
                                }
                        
                        
                } else {
                        $("#error_msg").show().text("Please fill in alrequired fields");           
                }
        });

        $("#edit").click(function(){
                /* 
                        Hide at the beginning every msg appears 
                                                                        */
                $("#error_msg").hide();
                $("#success_msg").hide();
                /* 
                        Collecting values of all inputs and save them into variables 
                                                                                          */
                var movie_id = $("#movie_id").val();
                var movie_name = $("#movie_name").val();
                var movie_url = $("#movie_url").val();
                var rating_range = $("#rating_range").val();
                /* 
                        check if inputs are empty 
                                                        */
                if(movie_name.length != 0 && movie_url.length != 0){
                        /* 
                                Creating POST String to send to IndexServer.php via AJAX Request 
                                                                                                        */
                        
                        if(ValidURL(movie_url)){
                                var dataString = 'movie_id=' + movie_id + '&movie_name=' + movie_name + '&movie_url=' + movie_url + '&rating_range=' + rating_range + '&Key=Edit-Exist';
                                $.ajax({
                                        type: "POST",
                                        url: "indexServer.php",
                                        data: dataString,
                                        cache: false,
                                        success: function(answer){
                                                if(answer){
                                                        $("#success_msg").show().text("Movie Rating has been added to Database");         
                                                }
                                                else {
                                                        $("#error_msg").show().text("Movie Rating has been added to Database");
                                                }
                                        }
                                });                            
                        } else  {
                                $("#error_msg").show().text("URL is not Valid");           
                        }
                        
                } else {
                        $("#error_msg").show().text("Please fill in alrequired fields");           
                }
        });
});


 /* 
    Get the value of input rating_range 
    Dispay the value in rating value
    */
    var slider = document.getElementById("rating_range");
    var output = document.getElementById("rating_value");
    output.innerHTML = slider.value;

    slider.oninput = function() {
            output.innerHTML = this.value;
    }

       