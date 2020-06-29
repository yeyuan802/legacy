<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class DynamicController extends CommonController
{
//后台登录页
    public function index()
    {
        $model=D('dynamic');
        $all=$model->select();
        foreach ($all as $v){
            if($v['title']==''){
                $id=$v['id'];
                $model->where("id=$id")->delete();
            }
        }
        $where=array('status'=>'1');
        $count=$model->count();
        $Page=new \Think\Page($count,5);
        foreach($where as $key=>$val){
            $Page->parameter[$key]=urlencode($val);
        }
        $Page->lastSuffix=false;
        $Page->setConfig('header','共%TOTAL_PAGE%页，当前是第%NOW_PAGE%页<br>');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %DOWN_PAGE% %END%');
        $show=$Page->show();

        $list = $model->where($where)->order(array('id' => 'asc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function revise(){
        $id=I('get.id',0, 'int');
        if(IS_POST){
            $this->reviseAction($id);
            return;
        }
        $model=D('dynamic');
        $res=$model->where("id=$id")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('dynamic','save',2,array("id=$id"));
        if ($rst===false){
            $this->error("修改动态失败");
        }
        $this->success('修改公告成功', U('Dynamic/index'));
    }

    public function content(){
        $id=I('get.id');
        $model=D('dynamic');
        $res=$model->where("id=$id")->select();
        $this->assign('page',$res);
        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $rst = $this->create('dynamic', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('添加成功', U('Dynamic/index'));
            //添加成功后查看传承人
        } else {
            $this->display();
        }
    }

    public function delete(){
        $model=D('dynamic');
        $id = $_GET['id'];
        //判断id是数组还是一个数值
        if(is_array($id)){
            $where = 'id in('.implode(',',$id).')';
        }else{
            $where = 'id='.$id;
        }
        //dump($where);
        $list=$model->where($where)->delete();
        if($list!==false) {
            $this->success("成功删除{$list}条！",U('Dynamic/index'));
        }else{
            $this->error('删除失败！');
        }
    }
}