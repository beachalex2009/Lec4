<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return " Index Page";
    }
    public function Show()
    {
        return " Show Page";
    }
    public function Create($id)
    {
        return " Create User $id";
    }
    public function Update($id)
    {
        return " Update User $id";
    }
    public function Delete($id)
    {
        return " Delete User $id";
    }
}
