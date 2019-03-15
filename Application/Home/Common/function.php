<?php

/**
 * 正确数据返回
 * @author dylan 2019-03-15 16:00:29
 */
function jsonList($list = [],$code = '0', $msg = '接口请求成功')
{
    return [
        'code' => $code,
        'msg' => $msg,
        'info' => $list
    ];
}

/**
 * 错误数据返回
 * @author dylan 2019-03-15 16:00:43
 */
function jsonMsg($code = '1', $msg, $list = [])
{
    return [
        'code' => $code,
        'msg' => $msg,
        'info' => $list,
    ];
}