<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $categories = Category::with('portfolios')->get();
        // return $categories[0]->portfolios;
        $portfolios = Portofolio::all();

        return view('portfolios' , compact('categories' , 'portfolios'));
        // return view('tabs' , compact('categories' , 'portfolios'));
    }
}
