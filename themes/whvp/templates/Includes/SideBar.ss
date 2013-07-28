<aside class="side-bar light-blue-bg text-left">
	<% if $Menu(1) %>
		<nav class="">
			<% with $Level(1) %>
			    <ul class="nav nav-list">

				    <li class="list-header"><h3>$MenuTitle</h3></li>
				    <li class="divider"></li>

					<% include SidebarMenu %>
				</ul>
			<% end_with %>
		</nav>
	<% end_if %>
</aside>
