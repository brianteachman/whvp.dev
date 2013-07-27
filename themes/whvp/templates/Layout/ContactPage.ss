		<% include Header %>

		<div class="row-fluid">

			<div class="span8">

				<div class="content">
					<% if IsSuccess && SubmitText %>
			            $SubmitText
			        <% else %>
			        	<span class="lead">$Content</span>
			            $Form
			        <% end_if %>
				</div>

			</div>

			<div class="span4">
				<% include SideBar %>
			</div>
		</div>

		<% include Footer %>