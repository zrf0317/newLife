<?php
namespace Home\Controller;
use Think\Controller;
class NoteController extends Controller {
    public function forumshow(){
		$where['forumID']=$_GET['forumID'];
		$where['top']=1;
		$all['forumID']=$_GET['forumID'];
		$all['top']=0;		
		$note=M('note');
		$topnote=$note->where($where)->select();
		$result=$note->where($all)->select();
		$this->assign('note',$result);
		$this->assign('topnote',$topnote);
		$this->display('forum');
		}
	public function noteshow(){
		$noteid=$_GET['id'];
		$Note=M('note');
		$User=M('user');
		$comment=M('comment');
		$reply=$comment->where("noteID='$noteid'")->select();
		$result=$Note->where("ID=$noteid")->find();
		$name=$result['author'];
		$pageview=$result['pageview'];
		$pageviewplus=$pageview+1;
		$Note->pageview=$pageviewplus;
		$Note->where("ID=$noteid")->save();
		$author=$User->where("username='$name'")->find();
		$this->assign('reply',$reply);
		$this->assign('author',$author);
		$this->assign('note',$result);
		$this->display('note');
	}
	public function addreply(){
		$comment=M('comment');
		$reply=$_POST['comment'];
		$noteid=$_GET['noteid'];
		$date=date('Y-m-d');
		$comment->noteID=$noteid;
		$comment->username=$_SESSION['username'];
		$comment->content=$reply;
		$comment->date=$date;
		$result=$comment->add();
		if($result>0){$this->success("评论成功！");}else $this->error("评论失败！");
	}
	public function fabu(){
		$forum=M('forum');
		$result=$forum->select();
		$this->assign("forum",$result);
		$this->display('fabu');
	}
	public function addnote(){
		$note=M('note');
		$note->author=$_SESSION['username'];
		$note->title=$_POST['title'];
		$note->content=$_POST['content'];
		$note->forumID=$_POST['forumname'];
		$note->date=date('Y-m-d');
		$note->pageview=0;
		$note->replysum=0;
		$note->top=0;
		$note->hot=0;
		$note->origin=0;
		$result=$note->add();
		if($result>0){
			$this->success("发布成功！");
		}else $this->error("发布失败！");
		
		
	}
	public function searchnote(){
		$note=M('note');
		$notetitle=$_GET['notetitle'];
		$where['title']=array('like','%'.$notetitle.'%');
		$where['author']=array('like','%'.$notetitle.'%');
		$where['_logic']='or';
		$list=$note->where($where,'OR')->select();
		$this->assign('list',$list);
		$this->display('searchnote');
	}
}