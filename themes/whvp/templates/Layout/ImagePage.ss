		<% include Header %>

		<div class="row-fluid">
			<div class="content">
				<div class="span9">
					<h2>Image Number: {$ImageID}-{$ImageGrpID}</h2>
					<img src="{$ThemeDir}/img/site/{$URLSegment}.jpg" alt="{$Title}, " class="img-rounded">
					$Content
				</div>

				<div class="span3">
					<% include SideBar %>
				</div>
			</div>

			$Form
			$PageComments
		</div>

		<% include Footer %>