<?php
namespace Admin\Model;
use Think\Model;
class Notice extends Model
{
    protected $insertFields = 'id,time,title,content,writer';
    protected $updateFields = 'id,time,title,content,writer';
    protected $_validate = array(
        array('id', 'require', 'id不能为空', 1, '', 3),
        array('time', 'require', '发布时间不能为空', 1, '', 3),
        array('title', 'require', '标题不能为空', 1, '', 3),
        array('content', 'require', '内容不能为空', 1, '', 3),
        array('writer', 'require', '作者不能为空', 1, '', 3),
        array('id', '0,10', '编号位数不合法（最多10位）', 1, 'length', 3),

        array('id', '', '编号已经存在', 1, 'unique', 1),
    );

}