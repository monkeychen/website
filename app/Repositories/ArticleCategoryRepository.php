<?php
/**
 * Created by PhpStorm.
 * User: chenzhian
 * Date: 2016/12/7
 * Time: 下午10:37
 */

namespace site\Repositories;


use site\ArticleCategory;

class ArticleCategoryRepository
{

    public function findOrderedCategories()
    {
        $categories = ArticleCategory::query()->orderBy('position', 'asc')->get();
        return generateNavItems($categories, 'subCategories');
    }
}