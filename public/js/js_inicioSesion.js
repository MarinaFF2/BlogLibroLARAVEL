/**
 * 
 *  @author marina
 */
$(document).ready(function () {
    $("#usuario").blur(function () {
        if ($("#usuario").val() === "") {
            $("#usuario").css({'border-color': 'red'});
        } else {
            $("#usuario").css({'border-color': 'black'});
        }
    });
    $("#pwd").blur(function () {
        if ($("#pwd").val() === "") {
            $("#pwd").css({'border-color': 'red'});
        }else{            
            $("#pwd").css({'border-color': 'black'});
        }        
    });
});
