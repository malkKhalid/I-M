<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('Admin.index');
    }

    function courses() {
        return view ('Admin.courses');
    }


    function files() {
        return view ('Admin.files');
    }

    function friends() {
        return view ('Admin.friends');
    }

    function plan() {
        return view ('Admin.plan');
    }

    function profile() {
        return view ('Admin.profile');
    }
    function projects() {
        return view ('Admin.projects');
    }

    function settings() {
        return view ('Admin.settings');
    }





}


