<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return "Menampilkan data user";
    }

    public function create()
    {
        return "Menambah user";
    }

    public function update($id)
    {
        return "Update user dengan ID: " . $id;
    }

    public function delete($id)
    {
        return "Hapus user dengan ID: " . $id;
    }
}
