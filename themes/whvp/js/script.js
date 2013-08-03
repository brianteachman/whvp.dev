function setHomePageFooterImageWidths() {

    if (document.body.className == "home") {

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
}

function setSiteImagesHeaderImagesWidths() {

    if (document.body.className == "site-images") {

        // Calculate the width of the footer and img containers
        var header_width = $(".image-info-header").width();
        var img_height = 220;
        var widths = [
            Math.round(img_height * 2.90456431535),
            Math.round(img_height * 1.3153526971)
        ];
        $('.image-info-header .site-img img').each(function(i) {
            $(this).attr('width', widths[i]);
        });
        console.log("The header (" + header_width + "px's wide) / 1 images = 1 block: " + img_height + "px's wide");
    }
}

function setFooterImageWidth() {

    if ($('.footer-img')) {

        // var img_width = $('.bottom').width();
        // $('.footer-img').width() = (img_width - 20);

        var div_bottom = document.getElementsByClassName('bottom')[0];
        var div_site_img = div_bottom.getElementsByClassName('site-img').item(0);
        var footer_img = div_site_img.getElementsByTagName('img')[0];

        console.log(footer_img);

        var img = document.getElementsByClassName('footer-img');
        console.log(img[0]);

        var img_width = Math.floor($('.bottom').width() * .93);
        img[0].setAttribute('width', img_width);
        
    }
}