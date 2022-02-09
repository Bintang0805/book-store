<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard.index');
    }

    public function managementUsers()
    {
        return view('admin.management-users.index');
    }

    public function managementBooks()
    {
        return view('admin.management-books.index');
    }
}
