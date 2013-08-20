<!DOCTYPE html>
<html lang="$ContentLocale">

<head>
  	<% base_tag %>
    <meta charset="utf-8">
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Brian Teachman">
	<%-- $MetaTags(false) --%>

    <!-- start: Facebook Open Graph -->
    <meta property="og:title" content="<% if $MetaTitle %>$MetaTitle:<% else %>$Title:<% end_if %> $SiteConfig.Title">
    <meta property="og:description" content="{$MetaDescription}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$AbsoluteLink}">
    <meta property="og:image" content="{$BaseHref}images/image-m.jpg">
    <!-- end: Facebook Open Graph -->
    
	<link href="/{$ThemeDir}/img/favicon.ico" rel="icon" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,800' rel='stylesheet' type='text/css'>
    <% require themedCSS('bootstrap.min') %>
    <% require themedCSS('whvp') %>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <%-- <script src="/{$ThemeDir}/js/html5shiv.js"></script> --%>
    <![endif]-->
</head>
<body class="$URLSegment" id="$ClassName">

	<div class="container-fluid typography" role="main">

		$Layout
		
	</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/{$ThemeDir}/js/bootstrap.min.js"></script>
<script src="/{$ThemeDir}/js/script.js"></script>

<%-- require javascript('framework/thirdparty/jquery/jquery.js') --%>

<script>
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
</script>

</body>
</html>
