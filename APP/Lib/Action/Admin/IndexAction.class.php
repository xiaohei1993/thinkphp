<?php
// 这是后台首页控制器 
Class IndexAction extends Action{
	Public function index(){
		echo C('username');
		echo '<br/>';
		echo C('admin');
		echo "<br/>";
		p($_SERVER);
		echo "<br/>";
		say();
	}
} 
 ?>