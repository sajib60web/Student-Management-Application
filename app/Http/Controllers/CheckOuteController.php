<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

session_start();

class CheckOuteController extends Controller {

    public function index() {
        return view('frontEnd.home.homeContent');
    }

    public function logout() {
        Session::put('admin_id', NULL);
        Session::put('admin_name', NULL);
        return Redirect::to('/');
    }

}
