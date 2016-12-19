define(["text!./index3.html","css!./index3.css"], function(homePage){
	return{
		init:function(){
			$(".index3").html(homePage).show().siblings("div").hide();
			$(".index2").html(homePage).hide().siblings("div").hide();
		}
	}
});