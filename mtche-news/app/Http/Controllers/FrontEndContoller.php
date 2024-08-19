<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Comment;
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
        $articles = Article::with('articleCategory')
            ->orderBy('created_at', 'desc')
            ->get();
    
        // 各記事ごとにコメント数を集計
        $articles->each(function ($article) {
            $article->comment_count = $article->comments()->count();
        });
    
        $highlight = Highlight::with('highligthCategory')->first();
    
        return view('index', compact('lang', 'articles', 'highlight'));
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
        $articles = Article::where('category_id', $id)
        ->orderBy('created_at', 'asc')
        ->get();
        $articles->each(function ($article) {
            $article->comment_count = $article->comments()->count();
        });
        $highlight = Highlight::all();
        return view('page', compact('lang','articles','highlight'));
    }

    
    public function article(Request $request)
{
    $id = $request->query('id');
    $lang = App::getLocale();
    $article = Article::with('articleCategory')->where('id', $id)->first();
    $comments = Comment::where('article_id', $id)->get();
    $article->comment_count = $comments->count();
    $latestArticles = Article::with('articleCategory')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
    $latestArticles->each(function ($article) {
            $article->comment_count = $article->comments()->count();
        });

    return view('article', compact('lang', 'article', 'comments', 'latestArticles'));
}

      
    public function contact(){
        $lang = App::getLocale();
        return view('contact', compact('lang'));
    }

    public function comment(Request $request){
        $request->validate([
            'fullname' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $comment=Comment::create([
        'article_id' => $request->input('article_id'),
        'name' => $request->input('fullname'),
        'content' => $request->input('message'),
         ]);

         return response()->json([
            'success' => true,
            'comment' => [
                'name' => $comment->name,
                'content' => $comment->content,
                'created_at' => $comment->created_at->format('Y/m/d'),
            ]
        ]);
    }

    public function request(){
        
        $lang = App::getLocale();
        $article = Article::with('articleCategory')
        ->orderBy('created_at', 'desc')
        ->get();

        $commentCount = Comment::all();
        $highlight = Highlight::with('highligthCategory')->first();
        return view('article_request', compact('lang','article','highlight','commentCount'));
    }
}