<?php

$name = $_POST['name'];
$email = $_POST['email'];

$app['database']->insert('users', ['name' => "'$name'", 'email' => "'$email'"]);

header('Location: /');
