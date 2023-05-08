<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class AboutController extends Controller
{
    public function index()
    {
        // SEO::title('About us')
        //     ->description('Become the Splade expert!')
        //     ->keywords('laravel, splade, course');
        $data = [
            'title' => 'About Us',
        ];
        return view('backend.about.about', $data);
    }
}
