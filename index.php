<IfModule mod_rewrite.c>



    Options +FollowSymLinks

    RewriteEngine on


    # Send request via index.php

    RewriteCond %{REQUEST_FILENAME} !-f

    RewriteCond %{REQUEST_FILENAME} !-d

    RewriteRule ^(.*)$ index.php/$1 [L]


</IfModule>
<?php


require "framework/core/Framework.class.php";



Framework::run();




?>
