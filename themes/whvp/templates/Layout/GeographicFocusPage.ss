<div id="map-body" class="">

    <div class="row faded-beige-bg">
        <div class="span5">
            <% include Header %>
            <hr>
            <div id="map-description">
                $Content
            </div>
        </div>
    </div>

    <div id="panel" class="row-fluid faded-beige-bg" role="contentinfo">

        <div class="controls">
            <button class="btn tb-btn"><i class="icon-chevron-down"></i></button>

            <input type="button" value="Toggle Area Map Layer" onclick="overlay.toggle();" class="btn tb-btn"></input>

            <p class="side-note">The image overlayed on this map is for illistrative purposes only.</p>
        </div>

		<% include NavBar_Fixed %>

    </div>
		
</div>

<div id="map-canvas"></div>
