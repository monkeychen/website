<?php

namespace site\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use site\Http\Requests;
use site\Http\Controllers\Controller;
use site\Repositories\ArticleRepository;
use site\Repositories\ArticleCategoryRepository;
use site\Repositories\PhotoRepository;
use site\User;

class DashboardController extends Controller
{
    protected $articleRepository;
    
    protected $photoRepository;

    protected $articleCategoryRepository;
    
    public function __construct(ArticleRepository $articleRepository,
                                PhotoRepository $photoRepository,
                                ArticleCategoryRepository $articleCategoryRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->photoRepository = $photoRepository;
        $this->articleCategoryRepository = $articleCategoryRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = null;
        if (Auth::check())
        {
            $user = Auth::user();
        }
        else
        {
            $user = User::where('id', 1)->first(); // User::find(1);
        }
        $photos = $this->photoRepository->forUser($user);
        $photoArr = array();
        foreach ($photos as $photo) {
            $photoArr[$photo->position] = $photo;
        }
        $articles = $this->articleRepository->forUser($user);
        $categories = $this->articleCategoryRepository->findOrderedCategories();
        foreach ($categories as $category) {
            $this->articleCategoryRepository->classifyArticles($category, $articles);
        }

        return view('welcome', [
            'photoArr' => $photoArr,
            'categories' => $categories,
        ]);
    }

    
}
