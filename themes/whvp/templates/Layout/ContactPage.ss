		<% include Header %>

		<div class="row-fluid">

			<div class="span8">

				<div class="content">
					<% if IsSuccess && SubmitText %>
			            $SubmitText
			        <% else %>
			        	$Content
			            $Form
			        <% end_if %>
				</div>

			</div>

			<div class="span4">
				<% include SideBar %>
			</div>
		</div>

		<% include Footer %>