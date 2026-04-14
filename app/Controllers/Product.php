<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function view($id)
    {
        return "ID Produk: " . $id;
    }
}
