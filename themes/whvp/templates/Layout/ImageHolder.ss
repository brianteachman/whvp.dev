		<div class="row-fluid">

			<div class="span12 image-info-header">

				<div class="site-img">
					<img src="{$BaseHref}images/image-l.jpg"
						 class="light-blue-bg"
						 alt="">
					<a href="{$BaseHref}site-images-info/image-l"  
					   class="badge info-btn pos-top-left" 
					   title="See Image L on the Site Image Info page">L</a>
				</div>

				<div class="site-img">
					<img src="{$BaseHref}images/image-m.jpg"
						 class="light-blue-bg"
						 alt="">
					<a href="{$BaseHref}site-images-info/image-m" 
					   class="badge info-btn pos-top-left" 
					   title="See Image M on the Site Image Info page">M</a>
				</div>

				 <header role="banner" class="$URLSegment dark-grey-bg">
					<h1 class="text-right">
						<a href="/" class="btn-back light-blue-bg brand" title="Return to Home page."><i class="icon-arrow-left icon-white"></i> whvp </a>
						<span>$Title</span>
					</h1>
				</header>
			</div>

		</div>

		<div class="row-fluid">
			<div class="span12">
				$Content
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">

				<section class="site-image-holder">
						
					<% loop $Children %>
		        	<div class="img-box light-blue-bg">
		        		<h2>Image $SiteLabel</h2>
			        	<hr>
			            <a href="{$AbsoluteLink}">
			            	<img data-original="images/{$URLSegment}.jpg" src="{$BaseHref}images/{$URLSegment}.jpg" alt="Image $SiteLabel" />
			            </a>

			            <div class="projectInfo">
			                <% if $Content %>
							<p>$Content</p>
							<% end_if %>
			            </div>
		        	</div>
			        <% end_loop %>

				</section>

			</div>
			$Form
		</div>

		<% include Footer %>