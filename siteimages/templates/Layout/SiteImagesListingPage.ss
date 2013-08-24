		<div class="row-fluid">

			<div class="span12 image-info-header">

				<header role="banner" class="$URLSegment dark-grey-bg">
					<h1 class="text-right">
						<a href="/" class="btn-back light-blue-bg brand" title="Return to Home page."><i class="icon-arrow-left icon-white"></i><!--  whvp  --></a>
						<span>$Title</span>
					</h1>
				</header>
				
				<div class="site-img">
					<img src="{$BaseHref}images/image-l.jpg"
						 class="light-blue-bg"
						 alt="">
					<a href="{$BaseHref}site-images#image-l"  
					   class="badge info-btn pos-top-left" 
					   title="See Image L on the Site Image Info page">L</a>
				</div>

				<div class="site-img">
					<img src="{$BaseHref}images/image-m.jpg"
						 class="light-blue-bg"
						 alt="">
					<a href="{$BaseHref}site-images#image-m" 
					   class="badge info-btn pos-top-left" 
					   title="See Image M on the Site Image Info page">M</a>
				</div>

			</div>

		</div>

		<div class="row-fluid">
			<div class="span12">
				$Content
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">

				<section>

					<% loop SiteImages %>
		        	<div class="img-box light-blue-bg">
		        		<a href="{$BaseHref}images/{$Image.Name}">
			            	<!-- <img data-original="images/{$Image.Name}" 
			            		 src="{$BaseHref}images/{$Image.Name}" 
			            		 alt="$Name" 
			            		 width="100" 
			            		 height="100" /> -->
			            	$Image.SetRatioSize(100,100)
			            </a>
		        		
			            <div class="image-info">
			            	<h2>$Name</h2>

			                <% if $Description %>
							<p>$Description</p>
							<% end_if %>
			            </div>
		        	</div>
			        <% end_loop %>

				</section>

			</div>
			$Form
		</div>

		<% include Footer %>