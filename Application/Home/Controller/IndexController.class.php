<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$type=M('forum');
		$note=M('note');
		$list=$type->select();
		$pageview=$note->sum('pageview');
		$notesum=$note->count();
		$hotnote=$note->where('hot=1')->limit(0,5)->select();
		$newnote=$note->limit(0,5)->order("date desc")->select();
		$replynote=$note->limit(0,5)->order("replysum desc")->select();
		$viewnote=$note->limit(0,5)->order("pageview desc")->select();
		$originote=$note->where('origin=1')->limit(0,5)->select();
		$this->assign("list",$list);
		$this->assign("hotnote",$hotnote);
		$this->assign("newnote",$newnote);
		$this->assign("replynote",$replynote);
		$this->assign("viewnote",$viewnote);
		$this->assign("originote",$originote);
		$this->assign("pageview",$pageview);
		$this->assign("notesum",$notesum);
		 $this->display('homepage');
    }
	public function loginshow(){
		$this->display('login');
	}
	public function registershow(){
		$this->display('register');
	}
	public function login(){
		$where['username']=I('post.username');
		$where['password']=md5(I('post.password'));
		$User=M("user");
		$result=$User->where($where)->find();
		if($result>0){
			session('UID',$result['uid']);
			session('icon',$result['icon']);
			session('username',$where['username']);	
			$this->success("登录成功！",U('index'));
			}else $this->error("请检查密码或用户名！",U('loginshow'));
	}
	public function register(){
		$User=M("user");
		$where['username']=$_POST['username'];
		$result=$User->where($where)->find();
		$verify=new\Think\Verify();
		$code=$_POST['code'];
		$date=date('Y-m-d');
		$User->create();
		$User->password=md5($_POST['password']);
		$str = "1234567890asdfghjklqwertyuiopzxcvbnmASDFGHJKLZXCVBNMPOIUYTREWQ";
    	$nickname=substr(str_shuffle($str),0,8);
		$User->nickname=$nickname;
		$User->description="这个用户是一只懒猫~";
		$User->regdate=$date;
		$User->icon="/Home/images/icon/0.jpg";
		if($result>0){
			$this->error("用户名已存在！",U('registershow'));
		}else{		
			if($verify->check($code)){
			$result=$User->add();
			if($result>0){
				$this->success("注册成功！",U('loginshow'));
			}
			else 
				$this->error("注册失败！",U('registershow'));
		}else {
		$this->error("验证码错误！",U('registershow'));
		}
		}
		
		/*$user=M("user");
		$user->create();
		$result=$user->add();
		if($result>0){
			$this->success("注册成功！",redirect(""));
			}else $this->error("注册失败！",redirect(""));*/
	}
	public function exitlogin(){
		session(null);
		$this->success("注销成功",U('index'));
	}
	public function verify(){
		$config = array(
                fontSize=>'100',//字体大小
                length=>'3'//字个数
        );
		$verify=new \Think\Verify($config);
		$verify->entry();
	}
	public function personalshow(){
		$User=M('user');
		$Note=M('note');
		$UID=$_SESSION['UID'];
		$author=$_SESSION['username'];
		$personal=$User->where("UID=$UID")->select();
		$invitation=$Note->where("author='$author'")->select();
		$this->assign("invitation",$invitation);
		$this->assign("personal",$personal);
		$this->display('personal');


	}
	public function updatepersonal(){
		$User=M('user');
		$UID=$_SESSION['UID'];
		$User->create();
		$result=$User->where("UID=$UID")->save();
		if($result>0){
			$this->success("修改成功！",U('personalshow'));
		}else{$this->error("修改失败！");}
	}
	public function uploadicon(){
		$User=M('user');
		$UID=$_SESSION['UID'];
		$lticon="./Public".$User->where("UID=$UID")->getField('icon');
		unlink($lticon);
		$rand=md5(time().mt_rand(0,1000));
		$config = array(
    	'maxSize'    =>    3145728,
    	'rootPath'   =>    '.\Public\Home\images\icon',
    	'saveName'   =>    $rand,
    	'exts'       =>    array('jpg','gif','png','jpeg'),
		'replace' => true, //覆盖同名文件
    );
		$upload=new\Think\Upload($config);
		$info=$upload->uploadOne($_FILES['file']);
		
		if(!$info){
			$this->error("修改图片失败！");
			}else {
			$User->where("UID=$UID")->icon='/Home/images/icon/'.$rand.'.jpg';
			$result=$User->save();
			$this->success("修改图片成功！",U('personalshow'));		
		}
		}
	public function updatepassworld(){
		$User=M('user');
		$UID=$_SESSION['UID'];
		$oldpsw=md5($_POST['oldpsw']);
		$newpsw=md5($_POST['newpsw']);
		$where['UID']=$UID;
		$verify=new\Think\Verify();
		$code=$_POST['code'];
		$result=$User->where("UID=$UID")->find();
		if($verify->check($code)){
			if($result['password']==$oldpsw){
				$User->password="$newpsw";
				$result=$User->where($where)->save();
				if($result>0){$this->success("修改成功！");}
				else $this->error("修改失败！");
		}else $this->error("密码不正确！");
		}else $this->error("验证码错误！");
		
	}
}