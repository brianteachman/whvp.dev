<!DOCTYPE html>
<html lang="$ContentLocale">

<head>
    <% base_tag %>
    <meta charset="utf-8">

    <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>

    <meta name="description" content="">
    <meta name="author" content="Brian Teachman">
    <%-- $MetaTags(false) --%>

    <!-- start: Open Graph -->
    <meta property="og:title" content="<% if $MetaTitle %>$MetaTitle:<% else %>$Title:<% end_if %> $SiteConfig.Title">
    <meta property="og:description" content="{$MetaDescription}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{$AbsoluteLink}">
    <meta property="og:image" content="{$BaseHref}images/image-m.jpg">
    <!-- end: Open Graph -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="/{$ThemeDir}/img/favicon.ico" rel="icon" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/{$ThemeDir}/js/html5shiv.js"></script>
    <script src="/{$ThemeDir}/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="$URLSegment typography" id="$ClassName">

        
    $Layout
        
    <!-- <small>Site by <a href="http://briant.me">Brian</a> (TeachmanWeb)</small> -->
</body>
</html>
