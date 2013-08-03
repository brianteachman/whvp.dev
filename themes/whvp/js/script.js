function setFooterImageWidths() {

    // Calculate the width of the footer and img containers
    var footer_width = $(".homepage-footer").width();
    var div_width = Math.floor( (footer_width / 5) - 4);
    var img_width = div_width - 20;
    //
    $('.img-list div').each(function() {
        $(this).css("width", div_width);
        $(this).css("height", div_width);
    });
    $('.img-list div img').each(function() {
        // $(this).attr('width', div_width);
        // $(this).attr('height', div_width);
        $(this).imgCenter({centerVertical: false});
        $(this).css('margin-left', 0);
    });
    console.log("The footer (" + footer_width + "px's wide) / 5 images = 1 image holder: " + div_width + "px's wide");
}