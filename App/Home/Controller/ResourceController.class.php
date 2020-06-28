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
        $this->display;
    }


    public function shop(){
        $goods=D("goods");
        $goodsList = $goods->where("gid>0")->order(array('gid' => "asc"))->select();
        $this->assign('goodsList',$goodsList);
        $this->display();
    }

    public function single(){
        $this->display();
    }

    public function wishlist(){
        $this->display();
    }

    public function search(){
        $search = I('post.search');

        $this->country();
        $this->display();
    }
}