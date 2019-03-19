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
        $data = $this->adminModel->getList($request);
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
        $commit_data = [];
        $this->startTrans();
        $commit_data[] = $this->adminModel->addData($request);
        if (db_commit($commit_data)) {
            return jsonMsg('添加成功');
        } else {
            return jsonMsg('添加失败');
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
        $param = $request;
        $commit_data = [];
        $this->startTrans();
        $commit_data[] = $this->adminModel->updateData();
        if (db_commit($commit_data)) {
            return jsonMsg('修改成功');
        } else {
            return jsonMsg('修改失败');
        }
    }


}