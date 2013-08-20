<div class="">
	<img class="bg" src="{$BaseHref}images/image-i.jpg" alt="Map showing whvp.org's areas of interest.">

	<div class="faded-beige-bg text-center geo-focus-btn">
		<a href="#message" class="btn btn-large light-beige-bg">
			Focus area <i class="icon-arrow-down"></i>
		</a>
	</div>

	<a href="http://whvp.dev/site-images/image-i" 
	   class="badge info-btn pos-top-right" 
	   title="See Image A on the Site Image Info page">I</a>
</div>

<article class="geographic-focus faded-beige-bg" id="message">
	
	<div class="row-fluid">
		<div class="span4 geo-header">
			<h1>$Title</h1>
		</div>
		<div class="offset2 span6 content lead">
			<div class="geo-content">
				$Content
			</div>
		</div>
	</div>

	<footer role="contentinfo">

		<div class="row-fluid">
			<% include FooterNavigation %>
	    </div>
		<!-- <small>Site by <a href="http://briant.me">Brian</a> (TeachmanWeb)</small> -->

	</footer>

</article>
