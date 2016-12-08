<?php
/**
 * Created by PhpStorm.
 * User: chenzhian
 * Date: 2016/12/7
 * Time: 下午10:37
 */

namespace site\Repositories;


use site\Article;
use site\ArticleCategory;

class ArticleCategoryRepository
{

    public function findOrderedCategories()
    {
        $categories = ArticleCategory::query()->orderBy('position', 'asc')->get();
        return generateNavItems($categories, 'subCategories');
    }

    public function classifyArticles(ArticleCategory &$category, $articles) 
    {
        if (is_null($category) || is_null($articles)) {
            return;
        }
        $code = $category->code;
        foreach ($articles as $article) {
            $category_code = $article->category_code;
            if ($code == $category_code)
            {
                array_push($category->articles, $article);
            }
        }
    }
}