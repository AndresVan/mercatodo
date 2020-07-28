<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ManageController extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        return view('/manageSelect');
    }
}
