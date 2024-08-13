<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Highlight;
use App\Models\HighlightCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;


class FrontEndContoller extends Controller
{
    protected $articleMenu;
    protected $highlightMenu;

    public function __construct()
    {
        $this->articleMenu = ArticleCategory::all();
        $this->highlightMenu = HighlightCategory::all();
       
        
        View::share([
            'articleMenu' => $this->articleMenu,
            'highlightMenu' => $this->highlightMenu,
        ]);
    }


    public function index()
    {
        $lang = App::getLocale();
        $article = Article::with('articleCategory')
        ->orderBy('created_at', 'desc')
        ->get();

        $highlight = Highlight::with('highligthCategory')->first();
        return view('index', compact('lang','article','highlight'));
    }

    public function about(){
        $lang = App::getLocale();

        return view('about', compact('lang'));
    }

    public function news(){ 
        $lang = App::getLocale();
        $article = Article::all();
        $highlight = Highlight::first();
        return view('news', compact('lang','article','highlight'));
    }     

    public function page(Request $request){
        $id = $request->query('id');
        $lang = App::getLocale();
        $article = Article::where('category_id', $id)
        ->orderBy('created_at', 'asc')
        ->get();
        $highlight = Highlight::all();
        return view('page', compact('lang','article','highlight'));
    }

    
    public function common(){
        $lang = App::getLocale();
        return view('common', compact('lang'));
    }

      
    public function contact(){
        $lang = App::getLocale();
        return view('contact', compact('lang'));
    }
}