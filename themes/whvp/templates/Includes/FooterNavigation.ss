        <!-- Navbar
        ================================================== -->
        <div class="nav light-blue-bg">

            <a href="$BaseHref" class="brand" rel="home">
                <strong class="title-subtle">$SiteConfig.Title</strong> <span class="title-slug">HOME</span>
            </a>
            <span class="link-end">&rarr;</span>
            
            <ul class="footer-nav" id="NavMenu">
            <% loop $Menu(1) %>
                <li class="$LinkingMode">
                    <a href="$Link" title="$Title.XML"><strong>$MenuTitle.XML</strong></a>
                    <span class="link-end">/</span>
                </li>
            <% end_loop %>
            </ul>

            <% if $CurrentMember %>
            <a href="/admin" class="member-link faded-beige-bg">
                <i class="icon-wrench"></i>
            </a>
            <% end_if %>

        </div>
