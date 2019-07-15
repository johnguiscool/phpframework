<?php

class NamesController
{
    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        App::get('database')->insert('users', ['name' => "'$name'", 'email' => "'$email'"]);

        header('Location: /');
    }
}
