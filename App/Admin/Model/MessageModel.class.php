<?php
namespace Admin\Model;
use Think\Model;
class Message extends Model
{
    protected $insertFields = 'id,time,title,content,writer，reply，phone，email';
    protected $updateFields = 'id,time,title,content,writer，reply，phone，email';
    protected $_validate = array(
        array('id', 'require', '动态id不能为空', 1, '', 3),
        array('time', 'require', '发布时间不能为空', 1, '', 3),
        array('title', 'require', '标题不能为空', 1, '', 3),
        array('reply', 'require', '回复不能为空', 1, '', 3),
        array('phone', 'require', '电话号码不能为空', 1, '', 3),
        array('email', 'require', '邮箱不能为空', 1, '', 3),
        array('content', 'require', '内容不能为空', 1, '', 3),
        array('writer', 'require', '作者不能为空', 1, '', 3),
        array('id', '0,10', '编号位数不合法（最多10位）', 1, 'length', 3),

        array('id', '', '编号已经存在', 1, 'unique', 1),
    );

}