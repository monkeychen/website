<?php
/**
 * Created by PhpStorm.
 * User: chenzhian
 * Date: 2016/12/7
 * Time: 下午10:12
 */

namespace site\Repositories;


use site\Photo;
use site\User;

class PhotoRepository
{
    public function forUser(User $user)
    {
        return Photo::where('user_id', $user->id)->orderBy('position', 'asc')->get();
    }
}