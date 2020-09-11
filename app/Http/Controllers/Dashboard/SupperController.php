<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupperController extends Controller
{

    public function __construct()
    {
        //auth()->setDefaultDriver('admin');

        $this->data['dashboard_dir'] = 'dashboard';
        $this->data['url_prefix'] = url('/dashboard');

    }

}
