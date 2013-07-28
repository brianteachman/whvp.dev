<!-- <form $FormAttributes> -->
<form class="form-horizontal contact" action="/contact/Form" method="post">
    <% if $Message %>
        <p id="{$FormName}_error" class="message $MessageType">$Message</p>
    <% else %>
        <p id="{$FormName}_error" class="message $MessageType" style="display: none"></p>
    <% end_if %>
     
    <fieldset>
        <div class="field">
            <label class="" for="{$FormName}_FirstName">First Name</label>
            $Fields.dataFieldByName(FirstName)
        </div>

        <div class="field">
            <label class="" for="{$FormName}_Surname">Surname</label>
            $Fields.dataFieldByName(Surname)
        </div>

        <div class="field">
            <label class="" for="{$FormName}_Email">Email</label>
            $Fields.dataFieldByName(Email)
        </div>

        <div class="field">
            <label class="" for="{$FormName}_Message">Message</label>
            $Fields.dataFieldByName(Comment)
        </div>

        <div class="field">
            <label class="" for="{$FormName}_RecaptchaProtector">Recaptcha</label>
            $Fields.dataFieldByName(Captcha)
        </div>
         
        $Fields.dataFieldByName(SecurityID)
    </fieldset>
     
    <% if $Actions %>
    <div class="Actions">
        <div class="field">
            <% loop $Actions %>$Field<% end_loop %>
        </div>
    </div>
    <% end_if %>
</form>