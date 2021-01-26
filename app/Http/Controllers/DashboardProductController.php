<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    public function index() {
        return view('admin.dashboard-products');
    }
}
