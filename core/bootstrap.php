<?php

// $app = [];

// $app['config'] = require 'config.php';

// $app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

App::bind('config', require 'config.php');

$config = App::get('config');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{

    extract($data);

    return require "views/$name.view.php";
}
