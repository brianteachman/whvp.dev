		<div class="row-fluid">

			<div class="span12 image-info-header">

				<%-- include SiteImagesHeader --%>

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
							$Description
							<% end_if %>
			            </div>
		        	</div>
			        <% end_loop %>

				</section>

			</div>
			$Form
		</div>

		<% include Footer_Fixed %>