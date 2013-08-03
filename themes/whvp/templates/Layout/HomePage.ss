		<header class="row-fluid" role="banner">
			<div class="span12 header-banner">

				<img src="{$BaseHref}images/header-banner.jpg" alt="Homepage image">
				<a href="{$BaseHref}site-images-info/image-a"  
				   class="badge info-btn pos-top-left" 
				   title="See Image A on the Site Image Info page">A</a>
			    <a href="{$BaseHref}site-images-info/image-b"  
				   class="badge info-btn pos-bottom-right" 
				   title="See Image B on the Site Image Info page">B</a>

				<span class="header-text">
					<h1 class="text-right">$SiteConfig.Title</h1>
					<h2 class="text-right">$SiteConfig.Tagline</h2>
				</span>

			</div>
		</header>

		<article class="row-fluid homepage-article">
			<div class="span7 content">
				$Content
				$Form
			</div>

			<div class="span5 search-box">
				$SearchForm
			</div>
		</article>

		<footer role="contentinfo">
			<div class="row-fluid">
				<% include FooterNavigation %>
		    </div>
			
			<div class="row-fluid">
				<% include HomePageFooter %>
			</div>
			<!-- <small>Site by <a href="http://briant.me">Brian</a> (TeachmanWeb)</small> -->
		</footer>