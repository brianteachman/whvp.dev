$(document).ready(function() {

    $("button").click(function () {
        var icon = $("button i");
        if ( icon.hasClass('icon-chevron-up') ) {
            icon.removeClass('icon-chevron-up');
            icon.addClass('icon-chevron-down');
        } else {
            icon.removeClass('icon-chevron-down');
            icon.addClass('icon-chevron-up');
        }
        $(".nav").slideToggle("slow");
    });
    
});