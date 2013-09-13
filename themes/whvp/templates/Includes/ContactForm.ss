<!-- <form $FormAttributes> -->
<form $FormAttributes class="form-horizontal contact" role="form">
    <% if $Message %>
        <p id="{$FormName}_error" class="message $MessageType">$Message</p>
    <% else %>
        <p id="{$FormName}_error" class="message $MessageType" style="display: none"></p>
    <% end_if %>

    <fieldset>
        <div class="form-group">
            <label for="{$FormName}_Name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                $Fields.dataFieldByName(Name)
            </div>
        </div>

        <div class="form-group">
            <label for="{$FormName}_Email" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                $Fields.dataFieldByName(Email)
            </div>
        </div>

        <div class="form-group">
            <label for="{$FormName}_Message" class="col-lg-2 control-label">Message</label>
            <div class="col-lg-10">
                $Fields.dataFieldByName(Message)
            </div>
        </div>
    </fieldset>
     
    $Fields.dataFieldByName(SecurityID)
     
    <% if $Actions %>
    <% loop $Actions %>$Field<% end_loop %>
    <% end_if %>
</form>