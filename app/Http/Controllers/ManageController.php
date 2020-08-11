<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewView;

class ManageController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(): ViewView
    {
        return view('/manageSelect');
    }
}
