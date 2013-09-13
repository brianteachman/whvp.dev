		<div class="row">

			<% include SiteImagesHeader %>

		</div>

		<div class="row content">
			<!-- <div class="col-md-12"> -->
				$Content
			<!-- </div> -->
		</div>

		<section class="row site-images-holder">

			<% loop SiteImages %>
			<div class="col-md-6">
	        	<div class="img-box light-blue-bg">
	        		
		            <div class="image-header">

						<a href="{$BaseHref}images/{$Image.Name}">
			            	$Image.SetRatioSize(100,100)
			            </a>
						<h2>$Name</h2>

					</div>

					<div class="image-description">
		                <% if $Description %>
						$Description.LimitWordCountXML
						<% end_if %>
					</div>
		            
	        	</div> <!-- end: .img-box -->
	        </div>
	        <% end_loop %>

			$Form

		</section>

		<% include Footer_Fixed %>