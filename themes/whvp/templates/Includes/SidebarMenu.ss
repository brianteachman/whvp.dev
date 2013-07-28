<% if $LinkOrSection = "section" %>
	<% if $Children %>

		<% loop $Children %>
		<li class="$LinkingMode">
			<a href="$Link" title="Go to the $Title.XML page">$MenuTitle.XML</a>

			<% if $Children %>
				<ul class="nav nav-list text-left">
					<% include SidebarMenu %>
				</ul>
			<% end_if %>
		</li>
		<% end_loop %>
	<% end_if %>
<% end_if %>
