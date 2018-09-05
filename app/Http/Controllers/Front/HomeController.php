<?php

/**
 * HomePage Controller
 * Author: John Ray Hernani
 * Date: 09/06/2018
 */

namespace App\Http\Controllers\Front;

use App\User;

class HomeController extends FrontController
{
  public function index()
  {
    return view('index');
  }
}
