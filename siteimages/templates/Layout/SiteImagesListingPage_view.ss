        <% include Header %>

        <div id="Breadcrumbs"><p>$Breadcrumbs</p></div>

        <% control Image %>

        <div id="site-image-title" class="row-fluid">
            <h2>Image Number: {$Name}</h2>
        </div>
        
        <div id="site-image" class="row-fluid">
            <div class="content">
                <div class="span9">

                    <div class="site-img">
                        <img src="{$BaseHref}images/{$Name}" alt="{$Title}, " class="light-blue-bg img-rounded">
                    </div>
                    <div>
                        <% if Up.Description %>
                            $Up.Description
                        <% end_if %>
                    </div>
                </div>

                <div class="span3">
                    <% include SideBar %>
                </div>
            </div>

            $Form
            $PageComments
        </div>

        <% end_control %>

        <% include Footer %>