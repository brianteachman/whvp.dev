<div id="map-body">

    <div class="container">
        <div class="map-content faded-beige-bg">

            <% include Header %>
            <!-- <hr> -->
            <div id="map-description">
                $Content
            </div>

        </div>
    </div>
        

    <div id="panel" class="row faded-beige-bg" role="contentinfo">

        <div class="controls">
            <button class="btn tb-btn"><i class="glyphicon glyphicon-chevron-down"></i></button>

            <input type="button" value="Area Overlay" onclick="overlay.toggle();" class="btn tb-btn"></input>

            <!-- <input type="button" value="Image I" onclick="overlay.toggle();" class="btn tb-btn"></input> -->

            <p class="side-note">The image overlayed on this map is for illistrative purposes only.</p>
        </div>

		<% include NavBar_Fixed %>

    </div>
		
</div>

<div id="map-canvas"></div>
