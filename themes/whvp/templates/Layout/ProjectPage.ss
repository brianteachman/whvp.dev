		<% include BreadCrumbs %>

	    <article class="project-page">

	    	<div class="row dark-grey-bg">
	    		<div class="col-md-12 content">

	        		<div class="beige-bg copy">

	        			<div class="top-right dark-grey-bg">

							<div class="col-md-6">

					        	<h3 class="resource-header">Articles &amp; Presentations</h3>
						        <div class="resource-list-box light-blue-bg">
						        	<ul class="resource-list">
						        		<% loop $Resources %>
						        		<% if $Type != 'Map' %>
										<li>
											<a href="{$BaseHref}resources/{$File.Name}">$Name</a>
										</li>
										<% end_if %>
										<% end_loop %>
						            </ul>
						        </div>

					        </div>
					        <div class="col-md-6">

					        	<h3 class="resource-header">Maps &amp; Images</h3>
					        	<div class="resource-list-box light-blue-bg">
					        		<ul class="resource-list">
							        	<% loop $Resources %>
						        		<% if $Type == 'Map' %>
										<li>
											<a href="{$BaseHref}resources/{$File.Name}">$Name</a>
										</li>
										<% end_if %>
										<% end_loop %>
							        </ul>
					        	</div>
								<!-- see the modal done below. -->

					        </div>

	        			</div><!-- .top-right -->

	        			<% if $Content %>
	        			$Content
	        			<% end_if %>

	        		</div>
		        </div><!-- .col-md-12 .content -->

	        </div>
	        <div class="row beige-bg">

	        	<div class="row">

	        		<div class="col-md-12 project-title">
	        			<h1 class="brand">$Title</h1>
	        		</div>

	        	</div>

		        <div class="row">
		        	<div class="col-md-12">
			        	<!-- <a href="#modalView" 
			        	   role="button" 
			        	   data-toggle="modal"> -->
			        		<img src="{$BaseHref}images/wfd-image.jpg" alt="...">
			        	<!-- </a> -->
						<!-- see the modal done below. -->
		        	</div>
		        </div>

	        </div>

	    </article>
        $Form

		<!-- start Modal -->
		<div id="modalView" 
			 class="modal hide fade" 
			 tabindex="-1" 
			 role="dialog" 
			 aria-labelledby="myModalLabel" 
			 aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">$Title</h3>
			</div>
			<div class="modal-body">
				<img src="{$BaseHref}images/wfd-image.jpg" alt="...">
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div> <!-- end Modal -->