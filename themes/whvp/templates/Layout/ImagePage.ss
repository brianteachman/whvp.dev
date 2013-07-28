		<% include Header %>

		<div class="row-fluid">
			<h2>Image Number: {$ImageID}-{$ImageGrpID}</h2>
		</div>
		
		<div class="row-fluid">
			<div class="content">
				<div class="span9">

					<div class="site-img">
						<img src="{$ThemeDir}/img/site/{$URLSegment}.jpg" alt="{$Title}, " class="light-blue-bg img-rounded">
					</div>
					<div class="content">
						$Content
					</div>
				</div>

				<div class="span3">
					<% include SideBar %>
				</div>
			</div>

			$Form
			$PageComments
		</div>

		<% include Footer %>