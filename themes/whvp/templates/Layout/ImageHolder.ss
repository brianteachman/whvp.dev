		<div class="row-fluid image-info-header">

			<div class="span7">
				<div class="site-img">
					<img src="{$ThemeDir}/img/site/image-l.jpg"
						 width="700" 
						 height="241"
						 alt="">
					<a href="http://whvp.dev/site-images-info/image-l"  
					   class="badge info-btn pos-top-left" 
					   title="See Image L on the Site Image Info page">L</a>
				</div>
			</div>

			<div class="span5">
				<div class="site-img">
					<img src="{$ThemeDir}/img/site/image-m.jpg"
						 width="317" 
						 height="241"
						 alt="">
					<a href="http://whvp.dev/site-images-info/image-m" 
					   class="badge info-btn pos-top-left" 
					   title="See Image M on the Site Image Info page">M</a>

				    <header role="banner" class="$URLSegment dark-grey-bg">
						<h1 class="text-right">
							<a href="/" class="btn-back light-blue-bg brand" title="Return to Home page."><i class="icon-arrow-left icon-white"></i> whvp </a>
							<span>$Title</span>
						</h1>
					</header>
				</div>
			</div>

		</div>

		<div class="row-fluid">
			<div class="span12 lead">
				$Content
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">

				<table class="table">
					<% loop $Children %>
					<tr>
						<td>
							<b><a href="{$AbsoluteLink}">Image $SiteLabel</a></b>
						</td>
						<td>$Content</td>
					</tr>
					<% end_loop %>
				</table>

			</div>
			$Form
		</div>

		<% include Footer %>