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
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 添加数据方法
     * $data 添加数据
     * @return  bool;
     * @author dylan 2019-03-19 16:39:49
     */
    public function addData($data)
    {
        return $this->add($this->create($data));
    }

    /**
     * 更新数据方法
     * @$map 更新条件
     * @$data 更新数据
     * @return bool
     * @author dylan 2019-03-19 16:40:38
     */
    public function updateData($map=[],$data)
    {
        return $this->where($map)->save($data);
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