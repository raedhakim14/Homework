/* Run GetMovieRating on document ready to fill up the table */
$(document).ready(function() {
    GetMovieRatings("");
    sortTable();
});


/* Get All movie ratings */
function GetMovieRatings(sort){

        var dataString = 'Key=Get-All&Sort=' + sort;
        $.ajax({
                type: "POST",
                url: "indexServer.php",
                data: dataString,
                dataType : "json",
                cache: false,
                success: function(myJSON){
                        var table_row = ""
                        for (key in myJSON) {
                                table_row += "<tr>  <td> " + myJSON[key].Movie_Name + " </td>       <td><a href='" + myJSON[key].Movie_URL + "' target='_blank'><img class='vote' src='../images/global.png' width='20'/></a></td>          <td> " + myJSON[key].Movie_Rating + " </td>       <td><img src='../images/vote.png' id='vote"+ myJSON[key].Id +"' class='vote' onclick='do_voting(" + myJSON[key].Id + ");' width='25' title='Vote'><span id='thanksMsg" + myJSON[key].Id + "'></span></td>           <td><span id='votersVal"  + myJSON[key].Id + "'>" + myJSON[key].Vote + "</span></td>       <td><a href='../admin/?id=" + myJSON[key].Id + "'>Edit</a></td></tr>"
                                $('#ratingsTable tbody').html(table_row);
                        }
                        
                }
        });
}
/* Do voting function */
function do_voting(movie_id){
    var dataString = 'Key=Get-Vote&movie_id='+movie_id;
    $.ajax({
            type: "POST",
            url: "indexServer.php",
            data: dataString,
            dataType : "json",
            cache: false,
            success: function(new_val){
                    $("#thanksMsg" + movie_id).text("TY");
                    $("#thanksMsg" + movie_id).show();
                    $("#vote" + movie_id).hide();
                    $("#votersVal" + movie_id).text(new_val)                                             
            }
    });
}
/* Table sorting on clicking on TH */

var thIndex = 0,
curThIndex = null;

$(function(){
        $('table thead tr th').click(function(){
                thIndex = $(this).index();
                if(thIndex != curThIndex){
                        curThIndex = thIndex;
                        sorting = [];
                        tbodyHtml = null;
                        $('table tbody tr').each(function(){
                                sorting.push($(this).children('td').eq(curThIndex).html() + ', ' + $(this).index());
                        });
                        sorting = sorting.sort();
                        sortIt();
                }
        });
})

function sortIt(){
        for(var sortingIndex = 0; sortingIndex < sorting.length; sortingIndex++){
                rowId = parseInt(sorting[sortingIndex].split(', ')[1]);
                tbodyHtml = tbodyHtml + $('table tbody tr').eq(rowId)[0].outerHTML;
        }
        $('table tbody').html(tbodyHtml);
}
