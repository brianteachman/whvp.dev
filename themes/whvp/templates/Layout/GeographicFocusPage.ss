<div id="map-body">

    <% include Header %>

    <div id="panel" class="row-fluid faded-beige-bg" role="contentinfo">

        <div class="controls">
            <button class="btn tb-btn"><i class="icon-chevron-down"></i></button>

            <input type="button" value="Toggle Area Map Layer" onclick="overlay.toggle();" class="btn tb-btn"></input>

            <p class="side-note">The image overlayed on this map is for illistrative purposes only.</p>
        </div>

		<% include FooterNavigation %>

    </div>
		
</div>

<div id="map-canvas"></div>
