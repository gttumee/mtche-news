<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\HighlightCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class ArticleRequest extends Controller
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
    
    public function index(Request $request)
    {
        $lang = App::getLocale(); 
        if ($request->has('article_title')) {
            $imageName = null;
    
            if ($request->hasFile('article_image')) {
                $image = $request->file('article_image'); 
                $imageName =time() . '.' . $image->store(); 
            }
            $articleData = [
                'title_mn' =>$request->input('article_title'),
                'article' => $request->input('article_aritcle'),
                'title_jp' =>$request->input('article_title'),
                'japanese' =>$request->input('article_aritcle'),
                'image' => $imageName,
                'flag' => '2',
                'writer' => $request->input('name'),
                'contact' => $request->input('email'),
            ];
    
            $article = Article::create($articleData);
            $successMessage = $lang === 'mn' ? 
            'Нийтлэл амжилттай илгээдлээ! Таны нийтлэлийг шалгаад нийтлэх болно, баярлалаа.' : 
            '記事が正常に送信されました！ご投稿いただいた記事は確認後、公開されます。ありがとうございます。';
            session()->flash('success', $successMessage);

        }
        return view('request', compact('lang'));
    }
}