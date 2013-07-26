		<% include Header %>

		<div class="row-fluid">

			<div class="span8">

				<div class="content">
					$Content
				</div>
				
				<% if IsSuccess && SubmitText %>
		            $SubmitText
		        <% else %>
		            $Form
		        <% end_if %>

			</div>

			<div class="span4">
				<% include SideBar %>
			</div>
		</div>

		<% include Footer %>