<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;

class showBlogController extends Controller
{
    /**
     * @var Model
     */
    private $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;

    }

    public function index(Request $request)
    {
        // Databaseから情報を取得する
        $result = $this->blogService->getBlogOutline(5);

        return view('page/index', compact('result'));
    }

    public function showLaravelArticle($article)
    {
        $url = 'page/programing/laravel/'.$article;

        return view($url);
    }

    public function showEnglishArticle($article)
    {
        $url = 'page/english/'.$article;

        return view($url);
    }
}
