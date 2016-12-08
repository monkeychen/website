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
    public function forUser(User $user, $limit = 10)
    {
        return Photo::where('user_id', $user->id)->orderBy('position', 'asc')->take($limit)->get();
    }

    public function classifyPhotos($photos)
    {
        $result = [
            'slide' => [],
            'top' => [],
            'bottom' => [],
        ];
        if (is_null($photos) || !isset($photos))
        {
            return $result;
        }
        foreach ($photos as $photo) {
            $areaCode = $photo->area_code;
            $result[$areaCode][] = $photo;
        }
        return $result;
    }
}