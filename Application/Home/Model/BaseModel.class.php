<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 17:33
 */

namespace Home\Model;

use Think\Model;

class BaseModel extends Model
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $model = D($this->getModel());
        $this->model = $model;
    }

    /**
     * 添加数据方法
     * $data 添加数据
     * @return  bool;
     * @author dylan 2019-03-19 16:39:49
     */
    public function addData($data)
    {
        return $this->model->create($data);
    }

    /**
     * 更新数据方法
     * $data 更新数据
     * @return bool
     * @author dylan 2019-03-19 16:40:38
     */
    public function updateData($param)
    {
        $where = $param['where'];
        $data = $param['data'];
        return $this->model->where($where)->update($data);
    }

    /**
     * 获取数据方法
     * $data
     * @return bool
     * @author dylan 2019-03-19 16:44:01
     */
    public function getList()
    {

    }


}