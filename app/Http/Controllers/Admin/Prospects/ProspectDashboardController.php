<?php

namespace App\Http\Controllers\Admin\Prospects;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProspectDashboardController extends Controller
{
    public function index(Prospect $prospect)
    {
        return view('admin.prospects.prospect.index', ['prospect' => $prospect]);
    }
}
