<?php
/**
 * Created by PhpStorm.
 * User: GodYu
 * Date: 2020/2/8
 * Time: 16:55
 */

namespace Home\Controller;
use Think\Controller;

class ResourceController extends Controller
{
    public function index(){
        $this->display();
    }
    public function countryList(){
        if($countryName=$_POST["country-name"]){
            session('contryName',$_POST["country-name"]);
        }else{
            $countryName=session('countryName');
        }
        $director=D("director");
        $map['place']=$countryName;
        $countryList = $director->where($map)->order(array('Did' => "asc"))->select();
        $this->assign('countryList',$countryList);
        $this->assign('cName',$countryName);
        $this->country();
        $this->display();
    }

    public function director(){
        $this->display();
    }

    public function directorList(){
        $director=D("director");
        $type = I('get.type',0);
        $map['type'] = $type;
        $typeList = $director->where($map)->order(array('Did' => "asc"))->select();

        $this->assign('typeList',$typeList);
        $this->country();
        $this->display;
    }


    public function shop(){
        $goods=D("goods");
        $goodsList = $goods->where("gid>0")->order(array('gid' => "asc"))->select();
        $travel=D("travel");
        $travelList =  $travel->where("id>0")->order(array('id' => "asc"))->select();
        $this->assign('goodsList',$goodsList);
        $this->assign('travelList',$travelList);
        $this->display();
    }

    public function single(){
        $gid = I('get.gid',0);
        $goods=D("goods");
        $map['gid'] = $gid;
        $singleSearch = $goods->where($map)->find();
        $this->assign('sList',$singleSearch);
        $this->display();
    }

    public function tsingle(){
        $id = I('get.id',0);
        $travel=D("travel");
        $map1['id'] = $id;
        $travelSearch = $travel->where($map1)->find();
        $this->assign('tList',$travelSearch);
        $this->display();
    }

<<<<<<< HEAD
=======
    public function wishlist(){
        $goods=D("goods");
        $goodsList = $goods->where("gid>0")->order(array('gid' => "asc"))->select();
        $this->assign('goodsList',$goodsList);
        $this->display();
    }

>>>>>>> origin/master
    public function cart(){
        $cart = D("cart");
        if($_SESSION['userName']){
            $map["username"]=$_SESSION['userName'];
            $cartList = $cart->where($map)->order(array('id' => "asc"))->select();
        }else{
            $cartList = null;
        }
        $goods=D("goods");
        $goodsList = $goods->where("gid>0")->order(array('gid' => "asc"))->select();
        $cartGoods = array();
        $i = 0;
        foreach ($cartList as $value){
            foreach ($goodsList as $value1){
                if($value['goodid'] == $value1['gid']){
                    $value1['id'] =$value['id'];
                    $value1['num'] = $value['num'];
                    $cartGoods[$i] = $value1;
                }
            }
            $i++;
        }
        $this->assign('cartGoods',$cartGoods);
        $this->display();
    }

    public function addCart(){
        if(isset($_POST)&&!empty($_POST)){
            $data=array(
                'num' => $_POST['num'],
                'goodid' => $_POST['gid'],
                'username' => $_SESSION['userName'],
                'time' => date('Y-m-d',time()),
                'status' => 1
            );
            $cart = D("cart");

            if (!$res = $cart->add($data)) {
                $this->error('添加失败!', U('Resource/shop'));
            } else {

                $this->success('添加成功！跳转至购物车界面。', U('Resource/cart'));
                return;
            }
        }else{
            $this->error('添加失败!', U('Resource/shop'));
        }
    }

    public function moveCart(){

        if($id = I('post.id',0)){
            $cart = D("cart");
            $map1['id'] = $id;
            if($cartdel = $cart->where($map1)->delete()){
                $this->success('删除成功！', U('Resource/cart'));
            }else{
                $this->error('删除失败!', U('Resource/cart'));
            }
        }
    }
    public function buy(){
        $this->display();
    }

    public function search(){
        $search = I('post.search','','trim');
        $dir= D("director");
        $map['name'] = $search;
        $dirList = $dir->where($map)->order(array('Did' => "asc"))->select();
        $this->assign('searchResult',$dirList);
        $this->country();
        $this->display();
    }
}