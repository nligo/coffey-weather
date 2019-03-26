<?php

namespace Coffey\Weather\Http\Controllers;

use Illuminate\Routing\Controller;


class UserController extends Controller
{
    public function index()
    {
        return ['name' => 'coffey'];
    }
}
