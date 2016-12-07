<?php
/**
 * Created by PhpStorm.
 * User: chenzhian
 * Date: 2016/12/7
 * Time: 下午10:46
 */

/**
 * @param $msg
 * @return mixed
 */
function testFun($msg)
{
    return $msg;
}

function generateNavItems($items, $subItems)
{
    $codeItemMap = array();
    $topItems = array();
    foreach ($items as $item) {
        $code = $item->code;
        $codeItemMap[$code] = $item;
    }
    foreach ($items as $item) {
        $pos = $item->position;
        $pCode = $item->parent_code;
        if (is_null($pCode) || !isset($pCode)) {
            $topItems[$pos] = $item;
            continue;
        }
        $pItem = $codeItemMap[$pCode];
        if (isset($pItem)) {
            array_push($pItem->$subItems, $item);
        }
    }
    ksort($topItems);
    return $topItems;
}