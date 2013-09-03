<aside class="side-bar light-blue-bg">
	<h3>
		Check out this map!
	</h3>
	<a href="#modalView" 
	   role="button" 
	   data-toggle="modal"
	   href="/site-images/image-k">
		<img src="{$BaseHref}/images/image-k.jpg" alt="See Image k at www.whvp.org/site-images/image-k">
	</a>
</aside>

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
		<img src="{$BaseHref}/images/image-k.jpg" alt="...">
	</div>
	<div class="modal-footer">
		<a href="{$BaseHref}/images/image-k.jpg" download="image-k.jpg">Download</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div> <!-- end Modal -->
