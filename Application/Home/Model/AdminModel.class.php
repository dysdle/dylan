<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:32
 */

namespace Home\Model;

use Home\Model;

class AdminModel extends BaseModel
{
    /*表字段验证*/
    protected $_auto = [];

    /**
     * 后台用户是否在职
     */
    const YES_SHOW = '1'; //在职
    const NO_SHOW = '2';  //离职
    const IS_SHOW = [
        self::YES_SHOW => '在职',
        self::NO_SHOW => '离职'
    ];

    public function getModel()
    {
        return 'AdminModel';
    }


}