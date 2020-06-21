<?php
namespace Home\Controller;
use Think\Controller;
use Think\Think;

class IndexController extends Controller
{
    public function index()
    {
        $pic = D("picture");
        $slide = $pic->where(array("type" => "slide"))->select();
        $this->assign("slide", $slide);

        //公告
        $notice = D("notice");
        $where = array("id>=1");
        $count = $notice->where($where)->count();
        //实例化分页类
        $Page = new \Think\Page($count,10);
        //保持查询参数
        foreach ($where as $key=>$val){
            $Page->parameter[$key] = urlencode($val);
        }
        $Page->lastSuffix = false;
        $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li><br>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '尾页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix=false;
        //分页显示输出
        $show = $Page->show();
        $list = $notice->where($where)->order(array('time' => 'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page', $show);
        //赋值分页输出
        //政策部分
        $policy = D("policy");
        $Poli_arr = $policy->where($where)->order(array('time' => 'desc'))->select();
        $count0 = 0;
        foreach ($Poli_arr as $key) {
            $poli_arr[$count0++] = $key;
            if ($count0 == 8) break;
        }
        $this->assign('policy', $poli_arr);


        //非遗名录部分
        $director = D("director");
        $Dir_ctxj = $director->where(array("type" => "传统戏剧"))->order(array('Did' => "asc"))->select();
        $Dir_mjyy = $director->where(array("type" => "民间音乐"))->order(array('Did' => "asc"))->select();
        $Dir_mjwd = $director->where(array("type" => "民间舞蹈"))->order(array('Did' => "asc"))->select();
        $Dir_ctgy = $director->where(array("type" => "传统手工技艺"))->order(array('Did' => "asc"))->select();
        $count=0;
        foreach ($Dir_ctxj as $key) {
            $dir_ctxj[$count++] = $key["name"];
            if ($count == 4) {
                $count=0;
                break;
            }
        }
        foreach ($Dir_mjyy as $key) {
            $dir_mjyy[$count++] = $key["name"];
            if ($count == 4) {
                $count=0;
                break;
            }
        }
        foreach ($Dir_mjwd as $key) {

            $dir_mjwd[$count++] = $key["name"];
            if ($count == 4) {
                $count=0;
                break;
            }
        }
        foreach ($Dir_ctgy as $key) {
            $dir_ctgy[$count++] = $key["name"];
            if ($count == 4)
                break;
        }
        $this->assign('ctxj', $dir_ctxj);
        $this->assign('mjyy', $dir_mjyy);
        $this->assign('mjwd', $dir_mjwd);
        $this->assign('ctgy', $dir_ctgy);

        //非遗动态部分
        $dynamic = D("dynamic");
        $Dyn_arr = $dynamic->where($where)->order(array('time' => 'desc'))->select();
        $count2=0;
        foreach ($Dyn_arr as $key) {
            $dyn_arr[$count2++] = $key;
            if ($count2 == 8) break;
        }
        $this->assign('dynamic',$dyn_arr);
        //传承人
        $inheritor = D("inheritor");
        $inher = $inheritor->where("id=1")->find();
        $this->assign('inher',$inher);
        //城市
        $this->country();
        $this->display();
    }

    public function page($value,$count,$where,$num){
        $Page = new \Think\Page($count,$num);
        //保持查询参数
        foreach ($where as $key=>$val){
            $Page->parameter[$key] = urlencode($val);
        }
        $Page->lastSuffix = false;
        $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li><br>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('last', '尾页');
        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $Page->lastSuffix=false;
        //分页显示输出
        $show = $Page->show();
        $list = $value->where($where)->order(array('time' => 'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page', $show);

        return $list;
    }
}
