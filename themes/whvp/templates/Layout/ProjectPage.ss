		<% include BreadCrumbs %>

	    <article class="project-page">

	    	<div class="row-fluid dark-grey-bg pad-1">

	    		<div class="span12">

	    			<!-- <div class="row-fluid">
		        		<div class="span12">

		        			<div class="">
		        				
		        			</div>
		        			
		        		</div>
		        	</div> -->

			        <div class="row-fluid">

			        	<div class="span4">
			        		<% if $Content %>
			        		<div class="content beige-bg">$Content</div>
			        		<% end_if %>
			        	</div>

				        <div class="span4">
				        	<h3 class="resource-header">Articles &amp; Presentations</h3>
				            <ul class="unstyled">
				        		<% loop $Resources %>
				        		<% if $Type != 'Map' %>
								<li>
									<a href="{$BaseHref}resources/{$File.Name}">$Name</a>
								</li>
								<% end_if %>
								<% end_loop %>
				            </ul>
				        </div>

				        <div class="span4">
				        	<h3 class="resource-header">Maps &amp; Images</h3>
					        <ul class="unstyled">
					        	<% loop $Resources %>
				        		<% if $Type == 'Map' %>
								<li>
									<a href="{$BaseHref}resources/{$File.Name}">$Name</a>
								</li>
								<% end_if %>
								<% end_loop %>
					        </ul>
							<!-- see the modal done below. -->
				        </div>
			        </div>
		        </div>

	        </div>
	        <div class="row-fluid beige-bg pad-1">
	        	
	        	<div class="row-fluid">
	        		<div class="span12">
	        			<h1 class="brand">$Title</h1>
	        		</div>
	        	</div>

	        	<div class="span12">
		        	<a href="#modalView" 
		        	   role="button" 
		        	   data-toggle="modal">
		        		<img src="{$BaseHref}images/wfd-image.jpg" alt="...">
		        	</a>
					<!-- see the modal done below. -->
	        	</div>

	        </div>

	    </article>
        $Form
		
		<% include FooterNavigation %>


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