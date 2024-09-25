<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Comment;
use App\Models\Contact;
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
        $this->articleMenu = ArticleCategory::where('flag','1')->get();
        $this->highlightMenu = HighlightCategory::where('flag','1')->get();
        View::share([
            'articleMenu' => $this->articleMenu,
            'highlightMenu' => $this->highlightMenu,
        ]);
    }


    public function index()
    {
        $lang = App::getLocale();
        $articles = Article::with('articleCategory')
        ->where('flag','1')
        ->orderBy('created_at', 'desc')
        ->get();
        $articles->each(function ($article) {
        $article->comment_count = Comment::where('article_id', $article->id)
        ->where('commentable_type', 'article')
        ->count();
        });
        $highlight = Highlight::with('highligthCategory')
        ->where('flag','1')
        ->orderBy('created_at', 'desc')
        ->first();
        if ($highlight) {
        $highlight->comment_count = Comment::where('article_id', $highlight->id)
        ->where('commentable_type', 'highlight')
        ->count();
    }
        return view('index', compact('lang', 'articles', 'highlight'));
    }
    
    public function about(){
        $lang = App::getLocale();

        return view('about', compact('lang'));
    }

    public function news(){ 
        $lang = App::getLocale();
        $article = Article::where('flag','1')
        ->get();
        $highlight = Highlight::where('flag','1')
        ->first();
        return view('news', compact('lang','article','highlight'));
    }     

    public function page(Request $request){
        $id = $request->query('id');
        $lang = App::getLocale();
        $articles = Article::where('category_id', $id)
        ->where('flag','1')
        ->orderBy('created_at', 'desc')
        ->get();
        $articles->each(function ($article) {
            $article->comment_count = $article->comments()->count();
        });
        return view('page', compact('lang','articles'));
    }

    
    public function article(Request $request)
{
    $id = $request->query('id');
    $lang = App::getLocale();
    $article = Article::with('articleCategory')
    ->where('id', $id)
    ->where('flag','1')
    ->first();
    $comments = Comment::where('article_id', $id)->get();
    $article->comment_count = $comments->count();
    $latestArticles = Article::with('articleCategory')
        ->where('flag','1')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
    $latestArticles->each(function ($article) {
            $article->comment_count = $article->comments()->count();
        });

    return view('article', compact('lang', 'article', 'comments', 'latestArticles'));
}

      
    public function contact(Request $request){
        {
            $lang = App::getLocale(); 
            if ($request->has('fullname')) {
                $articleData = [
                    'name' =>$request->input('fullname'),
                    'email' => $request->input('email'),
                    'phone' =>$request->input('phone'),
                    'message' => $request->input('message'),
                ];
        
                $article = Contact::create($articleData);
                $successMessage = $lang === 'mn' ? 
                'Таны хүсэлтийг хүлээн авлаа. Бид эргэн холбогдох болно' : 
                'リクエストを受け取り次第、折り返しご連絡させていただきます。';
                session()->flash('success', $successMessage);
    
            }
            return view('contact', compact('lang'));
        }
    }

    public function comment(Request $request){
        $request->validate([
            'fullname' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $comment=Comment::create([
        'article_id' => $request->input('article_id'),
        'commentable_type' => $request->input('commentable_id'),
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
        ->where('flag','1')
        ->orderBy('created_at', 'desc')
        ->get();

        $commentCount = Comment::all();
        $highlight = Highlight::with('highligthCategory')->first();
        return view('article_request', compact('lang','article','highlight','commentCount'));
    }

    public function higthArticle(Request $request)
    {
        $id = $request->query('id');
        $lang = App::getLocale();
        $highlight = Highlight::with('highligthCategory')
        ->where('id', $id)
        ->where('flag','1')
        ->first();
        $comments = Comment::where('article_id', $id)
        ->where('commentable_type', 'highlight')
        ->get();
        $highlight->comment_count = $comments->count();
        $latesthighlight = Highlight::with('highligthCategory')
        ->where('flag','1')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get();
        $latesthighlight->each(function ($highlight) {
            $highlight->comment_count = Comment::where('article_id', $highlight->id)
                ->where('commentable_type', 'highlight')
                ->count();
        });
    return view('higth_page', compact('lang', 'highlight', 'comments', 'latesthighlight'));
    }
    
    public function highlightPage(Request $request){
        $id = $request->query('id');
        $lang = App::getLocale();
        $highlights = Highlight::where('category_id', $id)
        ->where('flag','1')
        ->orderBy('created_at', 'asc')
        ->get();
        $highlights->each(function ($highlight) {
            $highlight->comment_count = Comment::where('article_id', $highlight->id)
                ->where('commentable_type', 'highlight')
                ->count();
        });
        return view('higth', compact('lang','highlights'));
    }
}