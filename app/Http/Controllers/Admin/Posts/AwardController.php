<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AwardController extends Controller
{
    public function index(): View
    {
        return view('admin.posts.awards.index');
    }
}
