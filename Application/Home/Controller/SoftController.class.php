<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:30
 */

namespace Home\Controller;


class SoftController extends BaseController
{
    public function __construct()
    {
        $this->begin = microtime(true);
        parent::__construct();
    }
}