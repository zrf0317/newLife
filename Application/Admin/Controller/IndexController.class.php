<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$User=M('user');
		$result=$User->select();
		$this->assign('user',$result);
        $this->display('lookuser');
    } 	
	public function deleteuser(){
		$User=M('user');
		$userid=$_GET['userid'];
		$result=$User->where("UID='$userid'")->delete();
		if($result>0){
			$this->success('删除成功！');}else $this->error("删除失败！");
		}
	public function noteshow(){
		$Note=M('note');
		$forum=M('forum');
		$result=$Note->select();
		$where['ID']=$result['forumid'];
		$forumname=$forum->where($where)->select();
		$this->assign('forum',$forumname);
		$this->assign('note',$result);
		$this->display('looknote');
		}
	public function deletenote(){
		$Note=M('note');
		$noteid=$_GET['noteid'];
		$result=$Note->where("ID='$noteid'")->delete();
		if($result>0){
			$this->success('删除成功！');}else $this->error("删除失败！");
		}
	public function addnoteshow(){
		$Forum=M('forum');
		$result=$Forum->select();
		$this->assign('forum',$result);
		$this->display('addnote');
	}
	public function addnote(){
		$Note=M('note');
		$Note->create();
		$Note->author="Admin";
		$Note->date=date('Y-m-d');
		$Note->pageview=0;
		$Note->replysum=0;
		$Note->top=0;
		$Note->hot=0;
		$Note->origin=0;
		$result=$Note->add();
		if($result>0){
			$this->success('添加成功！');}else $this->error("添加失败！");
		}
	public function updatenoteshow(){
		$Note=M('note');
		$forum=M('forum');
		$noteid=$_GET['noteid'];
		$result=$Note->where("ID='$noteid'")->find();
		$forumid=$result['forumid'];
		$forumname=$forum->select();
		$forumonname=$forum->where("ID='$forumid'")->find();
		$this->assign('forumname',$forumname);
		$this->assign('forum',$forumonname['name']);
		$this->assign('note',$result);
		$this->display('changenote');
		}
	public function commentshow(){
		$comment=M('comment');
		$note=M('note');
		$result=$comment->select();
		$noteid=$result["noteID"];
		$list=$note->where("ID='$noteID'")->select();
		$this->assign('comment',$result);
		$this->display('lookcomment');
	}
	public function deletecomment(){
		$comment=M('comment');
		$commentid=$_GET['commentid'];
		$result=$comment->where("ID='$commentid'")->delete();
		if($result>0){
			$this->success('删除成功！');}else $this->error("删除失败！");
		}
	public function notechange(){
		$note=M('note');
		$noteid=$_GET['noteid'];
		$note->create();
		$result=$note->where("ID='$noteid'")->save();
		if($result>0){
			$this->success('修改成功！');}else $this->error("修改失败！");
		
		
	}
}