<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authmanager extends Controller
{
public function signin()
{
return view ('users.signin');
}
}
