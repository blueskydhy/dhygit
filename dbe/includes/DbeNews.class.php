<?php
/**
 * 
 * 新闻类
 * @author boco
 *
 */
	class DbeNews{
		var $dbutil;
		
		//构造函数
		function __construct($dbutil){
			$this->dbutil = $dbutil;
		}
		
		/**
		 * 获取所有新闻列表
		 */
		function getAllNews(){
			$sql = "select * from dbe_news order by news_order desc";
			return $this->dbutil->get_results($sql);
		}
		
		/**
		 * 获取新闻列表，分页获取
		 * @param unknown_type $page
		 */
		function getNewsByPage($page){
			$totalsize = $this->getNewsNum();
			$page->setTotalSize($totalsize);
			$sql = "select * from dbe_news order by news_order desc limit ".$page->startIndex.",".$page->pagesize;
			$news =  $this->dbutil->get_results($sql);
			$page->result = $news;
			return $page;
		}
		
		/**
		 * 获取新闻列表数
		 */
		function getNewsNum(){
			return $this->dbutil->getResultNums("select * from dbe_news");
		}
		
		/**
		 * 新增新闻
		 * @param unknown_type $data
		 */
		function addNew($data){
			if(!$data){
				return;
			}
			return $this->dbutil->insert("dbe_news",$data);
		}
		
		/**
		 * 更新新闻员信息
		 * @param unknown_type $data
		 */
		function updateNew($data,$id){
			if(!$data){
				return;
			}
			return $this->dbutil->update("dbe_news",$data,array("id"=>$id));
		}
		
		/**
		 * 删除一条新闻
		 * @param unknown_type $id
		 */
		function deleteNew($id){
			if(!$id){
				return;
			}
			$sql = "delete from dbe_news where id=".$id;
			return $this->dbutil->query($sql);
		}
		
		/**
		 * 根据id查询一条新闻
		 * @param unknown_type $id
		 */
		function getNewsById($id){
			if(!$id){
				return;
			}
			return $this->dbutil->get_row("select * from dbe_news where id='".$id."'");
			
		}
	}
?>