<?php
namespace Admin\Model;
use Think\Model;
class Director extends Model
{
    protected $insertFields = 'Did,number,name,type,place,introduce,link,time';
    protected $updateFields = 'Did,number,name,type,place,introduce,link,time';
    protected $_validate = array(
        array('Did', 'require', 'id不能为空', 1, '', 3),
        array('number', 'require', '名录编号不能为空', 1, '', 3),
        array('name', 'require', '标题不能为空', 1, '', 3),
        array('introduce', 'require', '内容不能为空', 1, '', 3),
        array('place', 'require', '遗产地区不能为空', 1, '', 3),

    );

}