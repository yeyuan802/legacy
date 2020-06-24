<?php
namespace Admin\Model;
use Think\Model;
class Goods extends Model
{
    protected $insertFields = 'goodname,price,time,total,place,gid';
    protected $updateFields = 'goodname,price,time,total,place,gid';
    protected $_validate = array(
        array('goodname', 'require', '商品名不能为空', 1, '', 3),
        array('price', 'require', '商品价格不能为空', 1, '', 3),
        array('time', 'require', '上架时间不能为空', 1, '', 3),
        array('total', 'require', '商品库存量不能为空', 1, '', 3),
        array('gid', 'require', '商品编号不能为空', 1, '', 3),
        array('place', 'require', '商品产地不能为空', 1, '', 3),
        /* array('price', '/^[\d]+$/', '商品价格只能是数字', 1, '', 3),*/
        array('total', '/^[\d]+$/', '商品库存只能是数字', 1, '', 3),
        array('id', '', '商品编号已经存在', 1, 'unique', 1),
    );

}