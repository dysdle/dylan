<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:46
 */

namespace Home\Repository;


class AdminRepository extends BaseRepository
{
    //静态方法实例化
    public function model()
    {
        return 'AdminModel';
    }
}