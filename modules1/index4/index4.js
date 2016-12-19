define(["text!./index4.html","css!./index4.css"], function(homePage){
	return{
		init:function(){
			$(".index4").html(homePage).show().siblings("div").hide();
			$(".index1").html(homePage).hide().siblings("div").hide();
		}
	}
});