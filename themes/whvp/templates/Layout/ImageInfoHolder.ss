		<div class="row-fluid image-info-header">

			<div class="span7">
				<div class="site-img">
					<img src="{$ThemeDir}/img/site/image-l.jpg"
						 width="700" 
						 height="241"
						 alt="">
					<a href="http://whvp.dev/site-images-info/image-l"  
					   class="badge pos-top-left" 
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
					   class="badge pos-top-left" 
					   title="See Image M on the Site Image Info page">M</a>
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
							<b>Image $ImageLabel</b>
						</td>
						<td>$Content</td>
					</tr>
					<% end_loop %>
				</table>

			</div>
			$Form
		</div>

		<% include Footer %>