<?php
/**
 * 后台用户表
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:58
 */

namespace Home\Controller;

class AdminController extends SoftController
{
    /**
     * 获取后台用户列表
     * @return json
     * @author dylan 2019-03-14 18:00:42
     */
    public function getAdminList(){
        $param = I('get.');
        $data = D('Admin')->getAdminList($param);
        echo json_encode($data);
    }
}