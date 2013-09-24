		<% include BreadCrumbs %>

	    <article class="project-page">

	    	<div class="row-fluid dark-grey-bg pad-1">

	    		<div class="span8">
			        <h1 class="brand">$Title</h1>

			        <div class="row-fluid">
			        	<div class="span8">
			        		<div class="content">$Content</div>
			        	</div>
				        <div class="span4">
				        	<h4>Articles and Presentations</h4>
				            <ul class="unstyled">
				        		<hr>
								<li><a href="#">Link to a resource 1...</a></li>
								<li><a href="#">Link to a resource 2...</a></li>
								<li><a href="#">Link to a resource 3...</a></li>
				            </ul>
				        </div>
			        </div>
		        </div>

		        <div class="span4">
		        	<a href="#modalView" 
		        	   role="button" 
		        	   data-toggle="modal">
		        		<img src="/{$ThemeDir}/img/site/alp-image-top.jpg" alt="...">
		        	</a>
					<!-- see the modal done below. -->
		        </div>

	        </div>
	        <div class="row-fluid beige-bg pad-1">

	        	<div class="span8">
	        		<!-- <h1 class="brand">$SiteConfig.Title</h1> -->
	        		<img src="/{$ThemeDir}/img/site/alp-image-bottom.jpg" 
	        			 width="533"
	        			 height="400"
	        			 alt="...">
	        	</div>

	        	<div class="span4">
			        <h2 class="">Maps</h2>
			        <ul class="unstyled">
			        	<hr>
			            <li><a href="#">&raquo; map# xxx-WFD</a></li>
			            <li><a href="#">&raquo; map# xxx-WFD</a></li>
			            <li><a href="#">&raquo; map# xxx-WFD</a></li>
			        </ul>
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
				<img src="/{$ThemeDir}/img/site/alp-image-top.jpg" alt="...">
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div> <!-- end Modal -->