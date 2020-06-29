<?php
namespace Admin\Controller;

class GuestController extends CommonController
{
    //查看用户
    public function index()
    {
        $model=D('user');
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
        $list = $model->where($where)->order(array('uid' => 'asc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('res',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function seachguest(){
        $this->display();
    }
    public function order(){
        $id=I('get.uid',0, 'int');
        $ordermodel=D('order');

        $res=$ordermodel->where("uid=$id")->select();
        $this->assign('res',$res);
        $this->display();
    }


    public function searchguest_ok(){

        $uid =I('get.uid');
        $user = D('user');
        $userdata = $user->where("uid=$uid")->select();
        if(!$userdata) {
            echo "该顾客不存在";
        }else{
            //$orderdata=$order->where("uid=$uid")->select();
            //$ordergid=$orderdata->gid;
            //$goodsdata=$goods->where("gid=$ordergid")->select();
            $this->assign('userdata', $userdata);
            $this->display();
        }
    }


}