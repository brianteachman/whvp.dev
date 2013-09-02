$(document).ready(function() {

    setHomePageFooterImageWidths();
    setSiteImagesHeaderImagesWidths();
    setFooterImageWidth();

    $(window).resize(function() {
        setHomePageFooterImageWidths();
        setSiteImagesHeaderImagesWidths();
        setFooterImageWidth();
    });
});