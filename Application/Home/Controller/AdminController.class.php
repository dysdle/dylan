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
    public function getAdminList()
    {
        $param = I('get.');
        $data = D('Admin', 'Logic')->getAdminList($param);
        echo json_encode($data);
    }

    /**
     * 添加后台用户
     * @return json
     * @author dylan 2019-03-14 18:00:42
     */
    public function addAdmin()
    {
        $param = file_get_contents('php://input');
        $data = D('Admin', 'Logic')->addAdmin(json_decode($param, true));
        echo json_encode($data);
    }

    /**
     * 修改用户
     * @return array
     * @author dylan 2019-03-19 16:35:34
     */
    public function editAdmin()
    {
        $param = file_get_contents("php://input");;
        $data = D('Admin', 'Logic')->editAdmin(json_decode($param, true));
        echo json_encode($data);
    }
}