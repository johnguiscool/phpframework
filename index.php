
<?php

require 'vendor/autoload.php';

$query = require 'core/bootstrap.php';

$uri = Request::uri();

Router::load('routes.php')->direct($uri, Request::method());
