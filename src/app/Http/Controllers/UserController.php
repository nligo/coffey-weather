<?php

namespace Coffey\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return ['name' => 'coffey'];
    }
}
