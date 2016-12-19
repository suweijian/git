define(["backbone"], function(Backbone){
	var Router = Backbone.Router.extend({
		routes:{
			"":"home",
			home: "home",
			market: "market",
			order: "order",
			mine: "mine"
		},
		kong: function(){
			require(["modules1/index1/index1.js"],function(home){
				home.init();
			});
		},
		home: function(){
			require(["modules1/index1/index1.js"],function(home){
				home.init();
			});
		},
		market: function(){
			require(["modules1/index2/index2.js"],function(market){
				market.init();
			});
		},
		order: function(){
			require(["modules1/index3/index3.js"],function(order){
				order.init();
			});
		},
		mine: function(){
			require(["modules1/index4/index4.js"],function(mine){
				mine.init();
			});
		},
	});
	return new Router();
});