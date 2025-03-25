<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home_page');
    }

    public function catalog(): string
    {
        return view('catalog_page');
    }

    public function about(): string
    {
        return view('about_page');
    }

    public function contact(): string
    {
        return view('contact_page');
    }

    public function cart(): string
    {
        return view('cart_page');
    }

    public function login(): string
    {
        return view('login_page');
    }

    public function signup(): string
    {
        return view('signup_page');
    }
}
