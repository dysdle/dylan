<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:56
 */

namespace Home\Logic;
use Home\Model;
use Home\Model\AdminModel;

class AdminLogic extends Model\BaseModel
{
    protected $adminModel;

    //定义筛选条件

    //构造函数
    public function __construct()
    {
        $this->adminModel = D('Admin');
    }

    /**
     * 获取后台用户列表
     * $param 请求参数
     * @return array
     * @author dylan 2019-03-14 18:00:42
     */
    public function getAdminList($request){
        //过滤筛选条件
        $page_index = $request['page_index'];
        $per_page = $request['per_page'];

        unset($request['page_index']);
        unset($request['per_page']);


        //获取数据
        $data = D('Admin')->getList($request);
        return $data;
    }














}