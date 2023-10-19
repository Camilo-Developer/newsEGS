<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\New\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $categories = Category::whereHas('state', function ($query) {
            $query->where('type_state', '=', 1);
        })->take(5)->get();

        $news = News::whereHas('state', function ($query) {
            $query->where('type_state', '=', 1);
        })->latest()->take(5)->get();

        return view('news.index',compact('categories','news'));
    }

}
