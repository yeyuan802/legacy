<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户订单控制器
class OrderController extends CommonController
{
    //后台登录页
    public function index()
    {
        $model=D('order');
        $where=array('status'=>'1');
        $count=$model->where($where)->count();
        $Page=new \Think\Page($count, 5);

        foreach ($where as $key=>$val){
            $Page->parameter[$key]=urlencode($val);
        }

        $Page->lastSuffix=false;
        $Page->setConfig('header', '共%TOTAL_PAGE%页，当前是第%NOW_PAGE%页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '尾页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %UP_PAGE% %DOWN_PAGE% %END%');

        $show=$Page->show();

        $res=$model->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('res', $res);
        $this->assign('page', $show);
        $this->display();
    }
    public function delete(){
        $id=I('get.id',0, 'int');
        $model=D('order');
        $res=$model->where("id=$id")->delete();
        if ($res===false) {
            $this->error('删除商品失败');
        }
        $this->success('商品删除成功', U('Goods/index'));
    }

    public function revise(){
        $id=I('get.id',0, 'int');
        if(IS_POST){
            $this->reviseAction($id);
            return;
        }
        $model=D('goods');
        $res=$model->where("id=$id")->select();
        $this->assign('res',$res);
        $this->display();

    }
    public function reviseAction($id){
        $rst=$this->create('goods','save',2,array("id=$id"));
        if ($rst===false){
            $this->error("修改商品失败");
        }
        //保存上传文件
        if (!empty($_FILES['thumb']['name'])){
            $rst=D('goods')->uploadThumb('ttc'.$id);
            if ($rst!==true){
                $this->error($rst);
            }
        }
        $this->success('修改成功', U('Goods/index'));
    }

    public function search(){
        // $orderid=I('get.orderid');
        //$order=D('order');
        //$data=$order->where("orderid=$orderid")->select();
        //$this->assign('orderid',$orderid);
        //$this->assign('data',$data);
        $this->display();

    }
    public function search_ok(){
        $goodname="'".I('get.goodname')."'";
        $goods=D('goods');
        $data=$goods->where("goodname=$goodname")->select();
        $this->assign('res',$data);
        $this->display();
    }




}