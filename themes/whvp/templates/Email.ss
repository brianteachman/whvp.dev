<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <style>
            p, li {
                font-size: 1em;
                color: #000;
            }
        </style>
    </head>
    <body>
        <ul>
            <% if FirstName %><li>First name: $FirstName</li><% end_if %>
            <% if Surname %><li>Surname: $Surname</li><% end_if %>
            <% if Email %><li>Email address: $Email</li><% end_if %>
            <% if Phone %><li>Phone number: $Phone</li><% end_if %>
            <% if Comment %><li>Message: $Comment</li><% end_if %>
        </ul>
        <p>You can simply reply to this message.</p>
    </body>
</html>