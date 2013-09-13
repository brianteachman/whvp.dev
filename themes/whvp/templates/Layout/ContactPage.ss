		<% include Header %>

		<div class="row">

			<div class="col-md-12 content">
			<% if IsSuccess && SubmitText %>

            $SubmitText

	        <% else %>

        	$Content
            $ContactForm
            
	        <% end_if %>
			</div>

		</div>