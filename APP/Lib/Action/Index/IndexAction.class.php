<?php 
// 这里是前台首页控制器
Class IndexAction extends Action{
	Public function index () {
		// //echo "This is Index Page";
		// echo C('username');
		// echo '</br>';
		// echo C('pwd');
		// echo '<br/>';
		// echo C('index');
		// echo "<br/>";
		// p($GLOBALS);
		// echo "<br/>";
		// haha();
		$this->display();
	}
	// 异步表单处理
	Public function handle (){
		//var_dump(IS_AJAX);
		if (!IS_AJAX) halt('页面不存在');
	}
}
 ?>