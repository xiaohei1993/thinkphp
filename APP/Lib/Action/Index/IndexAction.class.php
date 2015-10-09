<?php 
// 这里是前台首页控制器
Class IndexAction extends Action{
	Public function index () {
		//echo "This is Index Page";
		echo C('username');
		echo '</br>';
		echo C('pwd');
		echo '<br/>';
		echo C('index');
		echo "<br/>";
		p($GLOBALS);
		echo "<br/>";
		haha();
	}
}
 ?>