<?php

class PagesController
{
    public function home()
    {
        $names = App::get('database')->selectAll('users');

        return view('index', ['names' => $names]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
