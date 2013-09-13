$(document).ready(function() {

    $("button").click(function () {
        $("nav").slideToggle("slow");
        
        var icon = $("button i");
        if ( icon.hasClass('glyphicon-chevron-up') ) {
            icon.removeClass('glyphicon-chevron-up');
            icon.addClass('glyphicon-chevron-down');
        } else {
            icon.removeClass('glyphicon-chevron-down');
            icon.addClass('glyphicon-chevron-up');
        }
    });
    
});