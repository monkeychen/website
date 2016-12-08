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
    /**
     * @param User $user
     * @param int $limit default 10
     * @return mixed
     */
    public function forUser(User $user, $limit = 10)
    {
        return Article::where('user_id', $user->id)->orderBy('created_at', 'asc')->take($limit)->get();
    }
}