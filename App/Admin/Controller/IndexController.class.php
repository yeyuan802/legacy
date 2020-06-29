<?php
namespace Admin\Controller;
//后台控制器
class IndexController extends CommonController {
    //后台首页
    public function index() {
        $model1=D('travel');
        $where1=array('status'=>'1');
        $travelcount=$model1->where($where1)->count();

        $model2=D('goods');
        $where2=array('status'=>'1');
        $goodscount=$model2->where($where2)->count();

        $model3=D('user');
        $where3=array('status'=>'1');
        $usercount=$model3->where($where3)->count();

        $model4=D('order');
        $where4=array('status'=>'1');
        $ordercount=$model4->where($where4)->count();

        $model5=D('notice');
        $where5=array('status'=>'1');
        $noticecount=$model5->where($where5)->count();

        $model6=D('message');
        $where6=array('status'=>'1');
        $messagecount=$model6->where($where6)->count();

        $model7=D('director');
        $where7=array('status'=>'1');
        $directorcount=$model7->where($where7)->count();

        $model8=D('dynamic');
        $where8=array('status'=>'1');
        $dynamiccount=$model8->where($where8)->count();

        $this->assign('travelcount', $travelcount);
        $this->assign('goodscount', $goodscount);
        $this->assign('usercount', $usercount);
        $this->assign('messagecount', $messagecount);
        $this->assign('noticecount', $noticecount);
        $this->assign('ordercount', $ordercount);
        $this->assign('directorcount', $directorcount);
        $this->assign('dynamiccount', $dynamiccount);

        $this->display();
    }
}