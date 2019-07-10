
<?php

require 'vendor/autoload.php';

$query = require 'core/bootstrap.php';

$uri = Request::uri();

require Router::load('routes.php')->direct($uri, Request::method());
