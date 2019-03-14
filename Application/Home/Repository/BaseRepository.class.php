<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:40
 */

namespace Home\Repository;

abstract class BaseRepository
{
    public $model;

    //构造函数
    public function __construct()
    {
        $this->makeModel();
    }

    abstract public function model();


    //设置model
    public function makeModel()
    {
        $mode = D($this->model());
        return $this->model = $mode;
    }

}