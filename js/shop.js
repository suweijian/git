
window.onload = function() {
	// 响应屏幕分辨率变化
	document.documentElement.style.fontSize = innerWidth/4.14 +"px";
	window.onresize =function(){
	  	document.documentElement.style.fontSize = innerWidth/4.14 + "px";
	}
	//图片轮播
  	var mySwiper = new Swiper ('.swiper-container', {
    	autoplay: 2000,
    	loop: true,
    	pagination: '.swiper-pagination',
  	})        
}