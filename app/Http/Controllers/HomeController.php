<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
}

public function index()
{
  // code...
  return $this->view('home/index');
}
