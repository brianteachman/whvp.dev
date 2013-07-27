<!-- <form $FormAttributes> -->
<form class="form-horizontal" action="" method="post">
    <% if $Message %>
        <p id="{$FormName}_error" class="message $MessageType">$Message</p>
    <% else %>
        <p id="{$FormName}_error" class="message $MessageType" style="display: none"></p>
    <% end_if %>
     
    <fieldset>
        <div id="Email" class="field control-group">
            <label class="control-label" for="{$FormName}_FirstName">First Name</label>
            <div class="controls">
                $Fields.dataFieldByName(FirstName)
            </div>
        </div>

        <div id="Email" class="field control-group">
            <label class="control-label" for="{$FormName}_Surname">Surname</label>
            <div class="controls">
                $Fields.dataFieldByName(Surname)
            </div>
        </div>

        <div id="Email" class="field control-group">
            <label class="control-label" for="{$FormName}_Email">Email</label>
            <div class="controls">
                $Fields.dataFieldByName(Email)
            </div>
        </div>

        <div id="Email" class="field control-group">
            <label class="control-label" for="{$FormName}_Message">Message</label>
            <div class="controls">
                $Fields.dataFieldByName(Comment)
            </div>
        </div>

        <div id="Email" class="field control-group">
            <label class="control-label" for="{$FormName}_RecaptchaProtector">Recaptcha</label>
            <div class="controls">
                $Fields.dataFieldByName(Captcha)
            </div>
        </div>
         
        $Fields.dataFieldByName(SecurityID)
    </fieldset>
     
    <% if $Actions %>
    <div class="Actions">
        <div id="Email" class="field control-group">
            <div class="controls">
                <% loop $Actions %>$Field<% end_loop %>
            </div>
        </div>
        
    </div>
    <% end_if %>
</form>