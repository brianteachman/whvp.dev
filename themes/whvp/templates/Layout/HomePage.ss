		<header class="row-fluid" role="banner">
			<div class="span12 header-banner">

				<img src="{$themeDir}/img/site/header-banner.jpg" alt="Homepage image">
				<a href="http://whvp.dev/site-images-info/image-a"  
				   class="badge info-btn pos-top-left" 
				   title="See Image A on the Site Image Info page">A</a>
			    <a href="http://whvp.dev/site-images-info/image-b"  
				   class="badge info-btn pos-bottom-right" 
				   title="See Image B on the Site Image Info page">B</a>

				<span class="header-text">
					<h1 class="text-right">$SiteConfig.Title</h1>
					<h2 class="text-right">$SiteConfig.Tagline</h2>
				</span>

			</div>
		</header>

		<article class="row-fluid homepage-article">
			<div class="span7 content lead">
				$Content
			</div>

			<div class="offset1 span4 search-box">
				$SearchForm
			</div>
		</article>
		$Form

		<footer role="contentinfo">

			<div class="row-fluid">
				<% include FooterNavigation %>
		    </div>
			<!-- <small>Site by <a href="http://briant.me">Brian</a> (TeachmanWeb)</small> -->
			
			<div class="row-fluid">
				<div class="homepage-footer">
					<ul class="inline">
						<li class="site-img">
							<img class="img-rounded" 
								 src="{$themeDir}/img/site/image-c.jpg" 
								 width="118"
								 height="135"
								 alt="See Image C on the Site Images page.">
							<a href="http://whvp.dev/site-images-info/image-c"  
							   class="pos-top-left badge info-btn" 
							   title="See Image C on the Site Image Info page">C</a>
						</li>
						<li class="site-img">
							<img class="img-rounded" 
								 src="{$themeDir}/img/site/image-d.jpg" 
								 width="194"
								 height="135"
								 alt="See Image D on the Site Images page.">
							<a href="http://whvp.dev/site-images-info/image-d"  
							   class="badge info-btn pos-top-left" 
							   title="See Image D on the Site Image Info page">D</a>
						</li>
						<li class="site-img">
							<img class="img-rounded" 
								 src="{$themeDir}/img/site/image-e.jpg" 
								 width="143"
								 height="135"
								 alt="See Image E on the Site Images page.">
							<a href="http://whvp.dev/site-images-info/image-e"  
							   class="badge info-btn pos-top-left" 
							   title="See Image E on the Site Image Info page">E</a>
						</li>
						<li class="site-img">
							<img class="img-rounded" 
								 src="{$themeDir}/img/site/image-f.jpg" 
								 width="186"
								 height="135"
								 alt="See Image F on the Site Images page.">
							<a href="http://whvp.dev/site-images-info/image-f"  
							   class="badge info-btn pos-top-left" 
							   title="See Image F on the Site Image Info page">F</a>
						</li>
						<li class="site-img">
							<img class="img-rounded" 
								 src="{$themeDir}/img/site/image-g.jpg" 
								 width="226"
								 height="135"
								 alt="See Image G on the Site Images page.">
							<a href="http://whvp.dev/site-images-info/image-g"  
							   class="badge info-btn pos-top-left" 
							   title="See Image G on the Site Image Info page">G</a>
						</li>
					</ul>

				</div>
			</div>

		</footer>