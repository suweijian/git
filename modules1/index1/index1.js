
define(["text!./index1.html","css!./index1.css"], function(homePage){
	return{
		init:function(){
			$(".index1").html(homePage).show().siblings("div").hide();
			$(".index3").html(homePage).hide();
			$(".index4").html(homePage).hide();
			$("#header").show();
		}
	}
});

