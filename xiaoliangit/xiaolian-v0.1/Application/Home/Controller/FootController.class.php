<?php
namespace Home\Controller;
use Think\Controller;
class FootController extends Controller {
    public function foot(){
    	$username=session('username');
    	// dump($username);exit;
    	if($username==""){
                echo "<script>";
                echo "alert('请先登录');";
                echo "location.href='../denglu/enter.html';";
                echo "</script>";    		
    	}
       $this->display();
    }
   
}