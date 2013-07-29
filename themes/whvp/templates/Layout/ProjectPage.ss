		<% include BreadCrumbs %>

	    <article class="project-page">

	    	<div class="row-fluid dark-grey-bg pad-1">

	    		<div class="span12">

	    			<div class="row-fluid">
		        		<div class="span12">
		        			<div class="callout-link lead">
		        				<a href="">
		        					Download the Woodstock Farm Park Image Display Guide
		        				</a>
		        			</div>
		        		</div>
		        	</div>

			        <div class="row-fluid">

			        	<div class="span4">
			        		<div class="content">$Content</div>
			        	</div>

				        <div class="span4">
				        	<h3>Articles and Presentations</h3>
				            <ul class="unstyled">
				        		<hr>
								<li><a href="#">Link to a resource 1...</a></li>
								<li><a href="#">Link to a resource 2...</a></li>
								<li><a href="#">Link to a resource 3...</a></li>
				            </ul>
				        </div>

				        <div class="span4">
				        	<h3 class="">Maps</h3>
					        <ul class="unstyled">
					        	<hr>
					            <li><a href="#">&raquo; map# xxx-WFD</a></li>
					            <li><a href="#">&raquo; map# xxx-WFD</a></li>
					            <li><a href="#">&raquo; map# xxx-WFD</a></li>
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