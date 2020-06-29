<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class DirectorController extends CommonController
{
//后台登录页
    public function index()
    {
        $model=D('director');
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

        $list = $model->where($where)->order(array('Did' => 'asc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function revise(){
        $id=I('get.Did',0, 'int');
        if(IS_POST){
            $this->reviseAction($id);
            return;
        }
        $model=D('director');
        $res=$model->where("Did=$id")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('director','save',2,array("Did=$id"));
        if ($rst===false){
            $this->error("修改名录失败");
        }
        $this->success('修改名录成功', U('Director/index'));
    }

    public function content(){
        $id=I('get.Did');
        $model=D('director');
        $res=$model->where("Did=$id")->select();
        $this->assign('page',$res);
        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $rst = $this->create('director', 'add');
            if ($rst === false) {
                $this->error($rst->getError());
            }
            $this->success('添加成功', U('Director/index'));
            //添加成功后查看传承人
        } else {
            $this->display();
        }
    }

    public function delete(){
        $model=D('director');
        $id = $_GET['Did'];
        //判断id是数组还是一个数值
        if(is_array($id)){
            $where = 'Did in('.implode(',',$id).')';
        }else{
            $where = 'Did='.$id;
        }
        //dump($where);
        $list=$model->where($where)->delete();
        if($list!==false) {
            $this->success("成功删除{$list}条！",U('Director/index'));
        }else{
            $this->error('删除失败！');
        }
    }
}