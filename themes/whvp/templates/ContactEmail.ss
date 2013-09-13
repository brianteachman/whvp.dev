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
        <h1>You have a message from www.whvp.org<h1>
        <ul>
            <% if FirstName %><li>From: $Name</li><% end_if %>
            <% if Email %><li>@: $Email</li><% end_if %>
            <% if Comment %><li>Message: <br />$Message</li><% end_if %>
        </ul>
        <p>You can simply reply to this message.</p>
    </body>
</html>