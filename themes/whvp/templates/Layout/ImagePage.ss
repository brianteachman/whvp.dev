		<% include Header %>

		<div class="row-fluid">

			<div class="span8">
				<h2>Image Number: {$ImageID}-{$ImageGrpID}</h2>
				<img src="{$ThemeDir}/img/site/{$URLSegment}.jpg" alt="{$Title}, ">
				<div class="content">$Content</div>
			</div>

			<div class="span4">
				<% include SideBar %>
			</div>


			$Form
			$PageComments
		</div>

		<% include Footer %>