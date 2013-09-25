		<!-- Start: HomePage -->
        <header class="row">
            <div class="header-banner" role="banner">

                <img class="banner-top" 
                     src="{$ThemeDir}/graphics/header.jpg" alt="Image A: Homepage banner">
                <img class="banner-bottom" 
                     src="{$BaseHref}images/image-b.png" 
                     alt="Image B: Homepage banner">

                <a href="{$BaseHref}site-images#image-a"  
                   class="badge info-btn image-a-pos" 
                   title="See Image A on the Site Image Info page">A</a>
                <a href="{$BaseHref}site-images#image-b"  
                   class="badge info-btn image-b-pos" 
                   title="See Image B on the Site Image Info page">B</a>

                <div class="header-text">
                    <h1>$SiteConfig.Title</h1>
                    <h2>$SiteConfig.Tagline</h2>
                </div>

            </div>
        </header>

        <article id="homepage-article" class="row">

            <!-- Start: Body Content -->
            <div class="col-md-7 content">

                $Content
				$Form
                
            </div>
            <!-- Start: Body Content -->


            <!-- Start: Search Box -->
            <div class="col-md-5">

                <div id="search-box">
                    
                    $SearchForm

                    <div class="search-tip">
                        <small>Search by: Topic, <span class="acronym">whvp</span> image #, project name</small>
                    </div>

                    <p id="SearchForm_SearchForm_error" class="message " style="display: none"></p>

                </div>

            </div>
            <!-- End: Search Box -->

        </article>
