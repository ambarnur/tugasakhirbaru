<?php

namespace App\Http\Controllers\Admin_lembaga;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin_lembaga.dashboard.index');
    }
}
