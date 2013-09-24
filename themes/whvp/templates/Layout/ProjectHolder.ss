		<% include Header %>

		<div class="row">

			<div class="col-md-6 content">

				<div class="split-content-page">

					<section>
						<h2>$SubHeader1</h2>
						<article>
							<% loop $Children %>
					        <p>
					            <a href="$Link" title="Read more on &quot;{$Title}&quot;">$Title</a>
					        </p>
						    <% end_loop %>
						    $Content
						</article>
					</section>

					<section>
						<h2>$SubHeader2</h2>
						<article>
							$Content2
						</article>
					</section>
				</div>

				$Form
				$PageComments

			</div>

			<div class="col-md-6 light-blue-bg">
				<img src="http://placehold.it/350x350" alt="">
				Need an image here
			</div>
			
		</div>
