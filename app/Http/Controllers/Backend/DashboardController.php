<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class DashboardController extends Controller
{
    public function index()
    {
        SEO::title('Dashboard')
            ->description('Become the Splade expert!')
            ->keywords('laravel, splade, course');
        $data = [
            'title' => 'Dashboard',
        ];
        return view('backend.main.dashboard',$data);
    }
}
