		<% include Header %>

		<div class="row-fluid">

			<div class="span9">

				<div class="content">
					<% if IsSuccess && SubmitText %>
			            $SubmitText
			        <% else %>
			        	<span class="lead">$Content</span>
			            $ContactForm
			        <% end_if %>
				</div>

			</div>

			<div class="span3">
				<% include PageSideBar %>
			</div>
		</div>