<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Requests;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

}


