<?php
/**
 * Created by PhpStorm.
 * User: chenzhian
 * Date: 2016/12/7
 * Time: 下午10:12
 */

namespace site\Repositories;


use site\Article;
use site\User;

class ArticleRepository
{
    public function forUser(User $user)
    {
        return Article::where('user_id', $user->id)->orderBy('created_at', 'asc')->get();
    }
}