<?php 

namespace Shifu\Controller;
use Common\Controller\HomebaseController;
/**
* 
*/
class IndexController extends HomebaseController
{
	function index()
	{		
		$Shifu=M("Shifu");		
	$array=	$Shifu->where("id>0")->select();
	$this->assign("list",$array);	
		 $this->display(":index");
	}	 
}



 ?>