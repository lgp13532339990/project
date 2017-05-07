<?php



return array(
	'TMPL_PARSE_STRING'  =>array(
	    // '__PUBLIC__/dist'   		=>	'../../../Public/dist', 		// 存放自己的 bootstrap jquery 等文件
	    // '__DISTLIB__'		=>	'../../../Public/dist/lib',		//存放自己写的 js css 文件
	    // '__PUBLIC__/TPLDIST'		=>	'../../../Public/TPLDIST', 	// 模版 JS CSS 文件
	    'TMPL_CACHE_ON' 	=>	false,						//禁止模板编译缓存 
		'HTML_CACHE_ON' 	=>	false,						//禁止静态缓存 
		'URL_ROUTER_ON' 	=>	true, 
		'URL_ROUTE_RULES'	=>	array(
			// '/Admin/login'	=>	'Admin/index.php/Home/Login/login'
		),
		
	)
);