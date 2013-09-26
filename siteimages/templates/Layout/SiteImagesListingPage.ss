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
	        	<div id="" class="img-box light-blue-bg">
	        		
		            <div class="image-header">

						<a href="{$BaseHref}images/{$Image.Name}">
							$Image
			            	<!-- $Image.SetRatioSize(100,100) -->
			            	<!-- $Image.SetWidth(100) -->
			            	<!-- $Image.croppedImage(100,100) -->
			            	<!-- $Image.CMSThumbnail() -->
			            </a>

					</div>

					<div>
						<div class="col-md-3 text-center">
							
							<h2>$Name</h2>

						</div>
						<div class="col-md-9">
							
							<div class="image-description">
				                <% if $Description %>
								$Description.LimitWordCountXML
								<% end_if %>
							</div>

						</div>
					</div>

					
		            
	        	</div> <!-- end: .img-box -->
	        </div>
	        <% end_loop %>

			$Form

		</section>

		<% include Footer_Fixed %>