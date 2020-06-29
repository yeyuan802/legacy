<?php
namespace Admin\Model;
use Think\Model;
class InheritorModel extends Model
{
    protected $insertFields = 'name,qname,introduce,inputtime,sex,age';
    protected $updateFields = 'name,qname,introduce,inputtime,sex,age';
    protected $_validate = array(
        array('name', 'require', '姓名不能为空', 1, '', 3),
        array('introduce', 'require', '事迹不能为空', 1, '', 3),

        array('age', '/^[\d]+$/', '年龄只能是数字', 1, '', 3),
    );
}