<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:56
 */

namespace Home\Logic;

use Home\Model;

class AdminLogic
{
    protected $adminModel;

    //定义筛选条件

    //构造函数
    public function __construct()
    {
        $this->adminModel = D('Admin');
    }

    /**
     * 获取用户列表
     * $param 请求参数
     * @return array
     * @author dylan 2019-03-14 18:00:42
     */
    public function getAdminList($request)
    {
        //过滤筛选条件
        $page_index = $request['page_index'];
        $per_page = $request['per_page'];

        unset($request['page_index']);
        unset($request['per_page']);

        //获取数据
        $data = D('Admin')->getList($request);
        return jsonList($data);
    }

    /**
     * 添加用户
     * $param 请求参数
     * @return array
     * @author dylan 2019-03-19 16:17:47
     */
    public function addAdmin($request)
    {
        if (empty($request)) {
            return jsonMsg('添加数据为空');
        }
        $commit_data = [];
        M()->startTrans();
        $commit_data[] = D('Admin')->addData($request);
        if (db_commit($commit_data)) {
            return jsonMsg('添加成功');
        } else {
            return jsonMsg('添加失败', '1');
        }
    }

    /**
     * 修改用户
     * $param 请求参数
     * @return array
     * @author dylan 2019-03-19 16:35:34
     */
    public function editAdmin($request)
    {
        if (empty($request['id'])) {
            return jsonMsg('数据为空');
        }
        $commit_data = [];
        M()->startTrans();
        $id = $request['id'];
        unset($request['id']);
        $commit_data[] = D('Admin')->updateData(['id'=>$id],$request);
        if (db_commit($commit_data)) {
            return jsonMsg('修改成功');
        } else {
            return jsonMsg('修改失败', '1');
        }
    }


}