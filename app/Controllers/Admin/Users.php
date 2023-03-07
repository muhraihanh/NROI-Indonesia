<?php

// namespace diubah dari App\Controllers -> menjadi seperti di bawah ini
// karena Controller Users terdapat di dalam Folder Admin
namespace App\Controllers\Admin;

// menggunakan use karena letak BaseController tidak sama dengan controller Users
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo "ini adalah index ketika akses Admin/users ";
    }
    public function lain()
    {
        echo "method lain";
    }
}
