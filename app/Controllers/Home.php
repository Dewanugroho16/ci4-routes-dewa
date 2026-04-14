<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return "Halaman Home";
    }

    public function admin()
    {
        return "Halaman Admin Dashboard";
    }
}
