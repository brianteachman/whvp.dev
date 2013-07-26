        <!-- Navbar
        ================================================== -->
        <div class="nav light-blue-bg">

            <a href="$BaseHref" class="brand" rel="home">
                <strong class="subtle-title">$SiteConfig.Title</strong>
            </a>
            <span class="padd">&rarr;</span>
            
            <ul class="footer-nav" id="NavMenu">
            <% loop $Menu(1) %>
                <li class="$LinkingMode">
                    <a href="$Link" title="$Title.XML">$MenuTitle.XML</a>
                    <span class="padd">/</span>
                </li>
            <% end_loop %>
            </ul>

        </div>
