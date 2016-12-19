
define(["text!./index2.html","css!./index2.css"], function(homePage){
	return{
		init:function(){
			$(".index2").html(homePage).show().siblings("div").hide();
			$(".index3").html(homePage).hide();
			$(".index4").html(homePage).hide();
			$("#header").show();
		}
	}
});
