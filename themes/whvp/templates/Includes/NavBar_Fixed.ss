        <!-- Navbar
        ================================================== -->
        <nav>

            <a href="$BaseHref" class="brand add-shadow" rel="home">
                <strong class="site-name">$SiteConfig.Title</strong> <span class="nav-text">HOME</span>
            </a>
            <span class="link-end">&rarr;</span>
            
            <ul class="footer-nav" id="NavMenu">
            <% loop $Menu(1) %>
                <li class="$LinkingMode">
                    <a href="$Link" title="$Title.XML" class="nav-text add-shadow">$MenuTitle.XML</a>
                    <span class="link-end">/</span>
                </li>
            <% end_loop %>
            </ul>

            <% if $CurrentMember %>
            <a href="/admin" class="btn member-link" target="_blank">
                <i class="icon-wrench"></i>
            </a>
            <% end_if %>

        </nav>
