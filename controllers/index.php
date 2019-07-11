<?php

$names = App::get('database')->selectAll('users');

require 'views/index.view.php';
