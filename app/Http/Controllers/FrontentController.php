<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class FrontentController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('home', compact('category'));
    }
    public function categoryPost()
    {
        return view('categoryPost');
    }
    public function postS()
    {
        return view('Post');
    }
}
