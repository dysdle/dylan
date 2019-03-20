<?php

/**
 * 正确数据返回
 * @author dylan 2019-03-15 16:00:29
 */
function jsonList($list = [], $code = '0', $msg = '接口请求成功')
{
    return [
        'code' => $code,
        'msg' => $msg,
        'info' => ['list' => $list ?: []]
    ];
}

/**
 * 错误数据返回
 * @author dylan 2019-03-15 16:00:43
 */
function jsonMsg($msg,$code = '1',$list = [])
{
    return [
        'code' => $code,
        'msg' => $msg,
        'info' => $list,
    ];
}

/**
 * 事务提交
 * @author dylan 2019-03-19 16:25:33
 */
function db_commit($commit_data)
{
    $tag = true;
    M()->commit();
    if (in_array($commit_data)) {
        foreach ($commit_data as $key => $value) {
            if ($value === false || $value == '0') {
                M()->rollback();
                $tag = false;
            }
        }
    } elseif ($commit_data == false) {
        $tag = false;
    }
    return $tag;
}