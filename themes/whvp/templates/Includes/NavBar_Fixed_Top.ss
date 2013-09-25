        <!-- Navbar
        ================================================== -->
        <nav>
            
            <ul class="footer-nav" id="NavMenu">
            <% loop $Menu(1) %>
                <li class="$LinkingMode">
                    <a href="$Link" title="$Title.XML" class="nav-text add-shadow">$MenuTitle.XML</a>
                    <span class="link-end">/</span>
                </li>
            <% end_loop %>
            </ul>

            <% if $CurrentMember %>
            <a href="/admin" class="btn member-link pull-right" target="_blank">
                <i class="glyphicon glyphicon-cog"></i>
            </a>
            <% end_if %>

        </nav>
