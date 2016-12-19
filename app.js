require.config({
	// "./"：代表目前所在的目录  "../"：代表上一层目录  以"/"开头：代表根目录
	paths: {
		//参数可使用数据 加载优先级按小标从小到大顺序
		"jquery": ["js/jquery-1.11.2", "js/jquery-1.8.1.js"],
		"text": "js/text",
		"backbone": "js/backbone",
		"underscore": "js/underscore",
		"css": "js/css"
	}
});
require(['jquery','backbone','router.js'],function($,Backbone){
    Backbone.history.start();
});
